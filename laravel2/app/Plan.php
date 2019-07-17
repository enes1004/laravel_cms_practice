<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
  public function products($service_id){
    $service=Service::where('id',$service_id)->first();
    return $this->hasMany($service->product_class());
  }
  public function update_purchase_logic($purch_obj){
    if($this->type=="subscription"){
      if($this->should_restrict($purch_obj)){return(['restrict'=>$this->limit_access_status]);}
      if($this->can_renew($purch_obj)){return(['add_new'=>$this->renewed_add_status]);}

  }
    return(false);
  }
  private static function add_timediff($begin_str,$diff_string){
    #"1 MONTH, 2 DAY" =>
    $diffs=explode(",",$diff_string);
    $end=strtotime($begin_str);
    foreach ($diffs as $diff) {
      $diff_one_array=explode(" ",trim($diff));
      $time_int=$diff_one_array[0];
      $time_scale=$diff_one_array[1];
      $end=mktime(
        date("H",$end)+(trim($time_scale)=="HOUR"?$time_int:0),
        date("i",$end)+(trim($time_scale)=="MINUTE"?$time_int:0),
        date("s",$end)+(trim($time_scale)=="SECOND"?$time_int:0),
        date("m",$end)+(trim($time_scale)=="MONTH"?$time_int:0),
        date("d",$end)+(trim($time_scale)=="DAY"?$time_int:0),
        date("Y",$end)+(trim($time_scale)=="YEAR"?$time_int:0)
      );

    }

    return $end;
  }

  private function can_renew($purch_obj){
    if($this->autorenew){
      if((Plan::add_timediff($purch_obj->created_at,$this->renew_when)<=time()) && ($this->can_renew_status==$purch_obj->status)){
        return true;
      }
    }
    return false;
  }
  private function should_restrict($purch_obj){
    if($this->check_access_limit_status==$purch_obj->status){

      if(Plan::add_timediff($purch_obj->updated_at,$this->limit_access_when)<=time()){
        return true;
      }
    }
    return false;
  }
}

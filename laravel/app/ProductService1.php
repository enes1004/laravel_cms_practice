<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\ContentInfo;
use Illuminate\Support\Facades\Schema;

class ProductService1 extends Model
{
      public function service(){
        return $this->belongsTo(Service::class);
      }
      public function purchases()
      {
          return $this->belongsToMany('App\User','App\PurchaseService1','product_id','user_id')->withPivot('status')->withTimestamps();
      }
      public function linked_content_groups($content_info_id){
        $content_info=ContentInfo::where('id',$content_info_id)->first();
        $rel_table="content_group_".mb_strtolower($content_info->name)."_product_service1";
        return Schema::hasTable($rel_table)?$this->belongsToMany($content_info->content_group_class(),$rel_table,"product_id","content_group_id"):null;
    }
    public function plan(){
      return $this->belongsTo('App\Plan','plan_id','id');
    }
}

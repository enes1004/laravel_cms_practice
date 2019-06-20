<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class ContentGroupContent1 extends Model
{
  public function content_info(){
    return $this->belongsTo(ContentInfo::class);
  }
  public function linked_products($service_id){
    $service=Service::where('id',$service_id)->first();
    $rel_table="content_group_content1_product_".mb_strtolower($service->name);
      return Schema::hasTable($rel_table)?$this->belongsToMany($service->product_class(),$rel_table,"content_group_id","product_id"):null;
  }

}

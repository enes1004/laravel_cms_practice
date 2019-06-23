<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content1 extends Model
{
  public function content_info(){
    return $this->belongsTo(ContentInfo::class);
  }
  public function categories(){
    return $this->belongsToMany('App\ContentCategoryContent1','content_category_content1_content1','content_id','content_category_id');
  }
  public function content_group(){
    return $this->belongsTo('App\ContentGroupContent1','id','content_group_id');
  }
}

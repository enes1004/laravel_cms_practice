<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentCategoryContent1 extends Model
{
  public function content_info(){
    return $this->belongsTo(ContentInfo::class);
  }
  public function contents(){
    return $this->belongsToMany('App\Content1','content_category_content1_content1','content_category_id','content_id');
  }
}

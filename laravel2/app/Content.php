<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
  public function content_info(){
    return $this->belongsTo(ContentInfo::class);
  }
  public function categories(){
    return $this->belongsToMany(ContentCategory::class);
  }
  public function content_group(){
    return $this->belongsTo(ContentGroupContent::class);
  }
}

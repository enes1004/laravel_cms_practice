<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
  public function content_info(){
    return $this->belongsTo(ContentInfo::class);
  }
  public function contents(){
    return $this->belongsToMany(Content::class);
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class ContentGroup extends Model
{
  public function content_info(){
    return $this->belongsTo(ContentInfo::class);
  }
  public function contents(){
    return $this->hasMany(Content::class);
  }
  public function product(){
    return $this->belongsTo(Product::class);
  }

}

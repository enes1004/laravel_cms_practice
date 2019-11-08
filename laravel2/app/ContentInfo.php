<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentInfo extends Model
{
  public function content_groups(){
    return $this->hasMany(ContentGroup::class);
  }
}

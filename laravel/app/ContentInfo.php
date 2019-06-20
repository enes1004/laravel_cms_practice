<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentInfo extends Model
{
  public function content_group_class(){
    return 'App\ContentGroup'.$this->name;
  }
}

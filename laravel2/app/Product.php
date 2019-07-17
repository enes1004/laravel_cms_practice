<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Product extends Model
{
      public function service(){
        return $this->belongsTo(Service::class);
      }

      public function linked_content_groups($content_info_id){
        }
    public function plan(){
      return $this->belongsTo(Plan::class);
    }
}

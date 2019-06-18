<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductService1 extends Model
{
      public function service(){
        return $this->belongsTo(Service::class);
      }
      public function purchases()
      {
          return $this->belongsToMany('App\User','App\PurchaseService1','product_id','user_id');
      }
}

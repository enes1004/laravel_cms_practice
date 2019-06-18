<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseService1 extends Pivot
{
  public function user()
  {
      return $this->belongsTo(User::class);
  }
  public function product()
  {
      return $this->belongsTo(ProductService1::class);
  }
}

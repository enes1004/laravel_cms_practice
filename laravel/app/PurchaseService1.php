<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseService1 extends Model
{
  public function user()
  {
      return $this->belongsTo(User::class);
  }
  public function product()
  {
      return $this->belongsTo(ProductService1::class);
  }
  public function check_and_do_updates(){
    $updates=$this->product()->first()->plan()->first()->update_purchase_logic($this);
    var_dump($updates);
  }
}

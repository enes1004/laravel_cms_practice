<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

  public function users()
  {
      return $this->belongsToMany(User::class);
  }
  public function products(){
      return $this->hasMany($this->product_class());
  }
  public function product_class(){
    return 'App\Product'.$this->name;
  }
  public function purchase_db(){
    return 'purchase_'.mb_strtolower($this->name)."s";
  }

}

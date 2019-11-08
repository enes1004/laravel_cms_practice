<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  public function user()
  {
      return $this->belongsTo(User::class);
  }
  public function content_group()
  {
      return $this->belongsTo(ContentGroup::class);
  }
  public function check_and_do_updates(){
    $updates=$this->content_group()->first()->product()->first()->plan()->first()->update_purchase_logic($this);
    var_dump($updates);
  }
}

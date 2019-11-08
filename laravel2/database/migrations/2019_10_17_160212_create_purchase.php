<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('purchases', function (Blueprint $table) {
             $table->increments('id');
             $table->timestamps();
             $table->string('status');
             $table->integer('user_id')->unsigned();
             $table->integer('content_group_id')->unsigned();
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('content_infos');
     }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentGroupContent1ProductService1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('content_group_content1_product_service1', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('content_group_id')->unsigned();
        $table->integer('product_id')->unsigned();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('content_group_content1_product_service1');

    }
}

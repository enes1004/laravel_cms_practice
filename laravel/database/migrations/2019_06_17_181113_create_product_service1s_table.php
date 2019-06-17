<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductService1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_service1s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('service_id')->unsigned();
            $table->integer('plan_id')->unsigned();
            $table->string('register_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_service1s');
    }
}

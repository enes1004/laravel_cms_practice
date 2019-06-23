<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentCategoryContent1Content1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_category_content1_content1', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('content_category_id')->unsigned();
          $table->integer('content_id')->unsigned();
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
        Schema::table('content_category_content1_content1', function (Blueprint $table) {
            Schema::drop('content_category_content1_content1');
        });
    }
}

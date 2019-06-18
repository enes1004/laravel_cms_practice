<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductService1s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('product_service1s', function (Blueprint $table) {
          $table->string('name');
          $table->string('description');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('product_service1s', function (Blueprint $table) {
          $table->dropColumn('name');
          $table->dropColumn('description');
      });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContentCategoryContent1Cols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content_category_content1s', function (Blueprint $table) {
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
        Schema::table('content_category_content1s', function (Blueprint $table) {
          $table->dropColumns('name');
          $table->dropColumns('description');
      });
    }
}

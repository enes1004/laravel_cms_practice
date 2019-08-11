<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContent1Cols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content1s', function (Blueprint $table) {
            $table->string('title');
            $table->string('writer');
            $table->string('content');
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
        Schema::table('content1s', function (Blueprint $table) {
          $table->dropColumns('title');
          $table->dropColumns('writer');
          $table->dropColumns('content');
          $table->dropColumns('content_group_id');

        });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('add_first_status');
            $table->boolean('autorenew');
            $table->string('renew_when');
            $table->string('can_renew_status');
            $table->string('renewed_add_status');
            $table->string('limit_access_when');
            $table->string('check_access_limit_status');
            $table->string('limit_access_status');
            $table->string('limit_scope');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plans');
    }
}

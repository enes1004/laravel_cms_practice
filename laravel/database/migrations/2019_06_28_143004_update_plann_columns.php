<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePlannColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('plans', function (Blueprint $table) {
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
      Schema::table('plans', function (Blueprint $table) {
        $table->dropColumn('name');
        $table->dropColumn('description');
        $table->dropColumn('type');
        $table->dropColumn('add_first_status');
        $table->dropColumn('autorenew');
        $table->dropColumn('renew_when');
        $table->dropColumn('can_renew_status');
        $table->dropColumn('renewed_add_status');
        $table->dropColumn('limit_access_when');
        $table->dropColumn('check_access_limit_status');
        $table->dropColumn('limit_access_status');
        $table->dropColumn('limit_scope');



      });
    }
}

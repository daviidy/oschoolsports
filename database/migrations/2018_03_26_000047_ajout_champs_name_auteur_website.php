<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AjoutChampsNameAuteurWebsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('chaussures', function ($table) {
          $table->string('name')->unique();
          $table->string('auteur');
          $table->string('website');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('name');
        $table->dropColumn('auteur');
        $table->dropColumn('website');
    }
}

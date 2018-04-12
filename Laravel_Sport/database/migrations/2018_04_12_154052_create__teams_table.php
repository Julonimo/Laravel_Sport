<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Teams', function (Blueprint $table) {
            $table->increments('Team_id');
            $table->string('Team_Name');
            $table->string('Team_Country');
            $table->string('Team_Flag_Path');
            $table->integer('Team_Stats_Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_teams');
    }
}

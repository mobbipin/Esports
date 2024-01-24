<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('game_name');
            $table->string('tournament_logo')->nullable();
            $table->text('tournament_details');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
}

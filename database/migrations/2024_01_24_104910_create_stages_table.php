<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournament_id')->constrained(); // Assuming you have a 'tournaments' table
            $table->string('stage_name');
            $table->date('stage_day');
            $table->time('stage_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stages');
    }
}

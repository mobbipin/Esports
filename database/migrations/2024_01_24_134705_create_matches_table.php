<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stage_id')->constrained();
            $table->string('match_no');
            $table->string('match_name');
            $table->foreignId('team_a_id')->constrained('teams');
            $table->foreignId('team_b_id')->constrained('teams');
            $table->string('playing_map_name');
            $table->string('playing_map_photo')->nullable();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matches');
    }
}


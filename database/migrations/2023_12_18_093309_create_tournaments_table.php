<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    public function loadPreviousTournaments()
    {
        // Add logic to fetch and return previous tournaments from the database
        // Example: $tournaments = Tournament::all();
        return view('tournament')->with('tournaments', $tournaments);
    }

    public function saveTournament(Request $request)
    {
        // Add logic to validate and save the tournament data to the database
        // Example: Tournament::create($request->all());
        return response()->json(['message' => 'Tournament saved successfully']);
    }

    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('game');
            $table->string('location');
            $table->string('type'); // You might want to change this to an enum or another appropriate type
            $table->string('tournament_logo')->nullable();
            $table->string('tournament_banner')->nullable();
            $table->date('tournament_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament; 

class TournamentController extends Controller
{
    // ... other methods

    public function showTournamentForm()
    {
        return view('create-tournament'); // Assuming your view file is named 'create-tournament.blade.php'
    }

    public function loadPreviousTournaments()
    {
        // Add logic to fetch and return previous tournaments from the database
        // Example: $tournaments = Tournament::all();
        return view('tournament')->with('tournaments', $tournaments);
    }

    public function saveTournament(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'game' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'tournament_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tournament_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tournament_date' => 'required|date',
        ]);

        // Save the tournament to the database
        Tournament::create($validatedData);

        return response()->json(['message' => 'Tournament saved successfully']);
    }
}

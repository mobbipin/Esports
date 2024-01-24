<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        return view('tournament.index', compact('tournaments'));
    }

    public function create()
    {
        return view('tournament.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'game_name' => 'required|string|max:255',
            'tournament_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'tournament_details' => 'required|string',
        ]);

        $tournamentData = $request->all();

        if ($request->hasFile('tournament_logo')) {
            $logoPath = $request->file('tournament_logo')->store('logos', 'public');
            $tournamentData['tournament_logo'] = $logoPath;
        }

        Tournament::create($tournamentData);

        return redirect()->route('tournaments.index')->with('success', 'Tournament created successfully.');
    }

    public function show($id)
    {
        $tournament = Tournament::findOrFail($id);
        return view('tournament.show', compact('tournament'));
    }

    public function edit($id)
    {
        $tournament = Tournament::findOrFail($id);
        return view('tournament.edit', compact('tournament'));
    }

    public function update(Request $request, $id)
    {
        $tournament = Tournament::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'game_name' => 'required|string|max:255',
            'tournament_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
            'tournament_details' => 'required|string',
        ]);

        $tournamentData = $request->except('tournament_logo');

        if ($request->hasFile('tournament_logo')) {
            // Delete old logo if exists
            if ($tournament->tournament_logo) {
                unlink(public_path("storage/{$tournament->tournament_logo}"));
            }

            $logoPath = $request->file('tournament_logo')->store('logos', 'public');
            $tournamentData['tournament_logo'] = $logoPath;
        }

        $tournament->update($tournamentData);

        return redirect()->route('tournaments.index')->with('success', 'Tournament updated successfully.');
    }

    public function destroy($id)
    {
        $tournament = Tournament::findOrFail($id);

    

        $tournament->delete();

        return redirect()->route('tournaments.index')->with('success', 'Tournament deleted successfully.');
    }
}

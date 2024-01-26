<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Team;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function teamInfo($tournamentId, $stageId, $matchId)
    {
        // Fetch the match data based on IDs
        $match = Matches::find($matchId);

        // Check if the match exists
        if (!$match) {
            abort(404); // Or handle it in a way that makes sense for your application
        }

        // You need to adjust these relationships based on your actual data structure
        // Assuming you have a Team model with a relationship to Player
        $team1 = $match->team1; // Adjust this based on your actual relationship name
        $team2 = $match->team2; // Adjust this based on your actual relationship name

        // Render the view with match, team1, and team2 data
        return view('tournament.stages.teams.teaminfo', compact('match', 'team1', 'team2'));
    }


    public function index($tournamentId, $stageId)
    {
        $matches = Matches::where('stage_id', $stageId)->get();
        return view('tournament.stages.matches.index', compact('matches', 'tournamentId', 'stageId'));
    }

    public function create($tournamentId, $stageId)
    {
        $teams = Team::where('stage_id', $stageId)->get();
        return view('tournament.stages.matches.create', compact('tournamentId', 'stageId', 'teams'));
    }

    public function store(Request $request, $tournamentId, $stageId)
    {
        $request->validate([
            'match_no' => 'required',
            'match_name' => 'required',
            'team_a_id' => 'required',
            'team_b_id' => 'required',
            'playing_map_name' => 'required',
            'playing_map_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add other validation rules as needed
        ]);

        $matchData = $request->except('playing_map_photo');
        $matchData['stage_id'] = $stageId;

        if ($request->hasFile('playing_map_photo')) {
            $photoPath = $request->file('playing_map_photo')->store('playing_maps', 'public');
            $matchData['playing_map_photo'] = $photoPath;
        }

        Matches::create($matchData);

        return redirect()->route('tournaments.stages.matches.index', ['tournamentId' => $tournamentId, 'stageId' => $stageId])->with('success', 'Match created successfully.');
    }

    public function show($tournamentId, $stageId, $matchId)
    {
        $match = Matches::findOrFail($matchId);
        return view('tournament.stages.matches.show', compact('match', 'tournamentId', 'stageId'));
    }

    public function edit($tournamentId, $stageId, $matchId)
    {
        $match = Matches::findOrFail($matchId);
        $teams = Team::where('stage_id', $stageId)->get();
        return view('tournament.stages.matches.edit', compact('match', 'tournamentId', 'stageId', 'teams'));
    }

    public function update(Request $request, $tournamentId, $stageId, $matchId)
    {
        $request->validate([
            'match_no' => 'required',
            'match_name' => 'required',
            'team_a_id' => 'required',
            'team_b_id' => 'required',
            'playing_map_name' => 'required',
            'playing_map_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add other validation rules as needed
        ]);

        $match = Matches::findOrFail($matchId);
        $matchData = $request->except('playing_map_photo');

        // if ($request->hasFile('playing_map_photo')) {
        //     // Delete old playing map photo if exists
        //     if ($match->playing_map_photo) {
        //         unlink(public_path("storage/{$match->playing_map_photo}"));
        //     }

        //     $photoPath = $request->file('playing_map_photo')->store('playing_maps', 'public');
        //     $matchData['playing_map_photo'] = $photoPath;
        // }

        $match->update($matchData);

        return redirect()->route('tournaments.stages.matches.index', ['tournamentId' => $tournamentId, 'stageId' => $stageId])->with('success', 'Match updated successfully.');
    }

    public function destroy($tournamentId, $stageId, $matchId)
    {
        $match = Matches::findOrFail($matchId);

        // Delete playing map photo if exists
        // if ($match->playing_map_photo) {
        //     unlink(public_path("storage/{$match->playing_map_photo}"));
        // }

        $match->delete();

        return redirect()->route('tournaments.stages.matches.index', ['tournamentId' => $tournamentId, 'stageId' => $stageId])->with('success', 'Match deleted successfully.');
    }
}

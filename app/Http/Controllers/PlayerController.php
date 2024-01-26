<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index($tournamentId, $stageId, $teamId)
{
    $players = Player::where('team_id', $teamId)->get();
    return view('tournament.stages.teams.players.index', compact('players', 'tournamentId', 'stageId', 'teamId'));
}


    public function create($tournamentId, $stageId, $teamId)
    {
        return view('tournament.stages.teams.players.create', compact('tournamentId', 'stageId', 'teamId'));
    }

    public function store(Request $request, $tournamentId, $stageId, $teamId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $playerData = $request->except('photo');
        $playerData['team_id'] = $teamId;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $playerData['photo'] = $photoPath;
        }

        Player::create($playerData);

        return redirect()->route('tournaments.stages.teams.players.index', [
            'tournamentId' => $tournamentId,
            'stageId' => $stageId,
            'teamId' => $teamId,
        ])->with('success', 'Player added successfully.');
    }

    public function show($tournamentId, $stageId, $teamId, $playerId)
    {
        $player = Player::findOrFail($playerId);
        return view('tournament.stages.teams.players.show', compact('player', 'tournamentId', 'stageId', 'teamId'));
    }

    public function edit($tournamentId, $stageId, $teamId, $playerId)
    {
        $player = Player::findOrFail($playerId);
        return view('tournament.stages.teams.players.edit', compact('player', 'tournamentId', 'stageId', 'teamId'));
    }

    public function update(Request $request, $tournamentId, $stageId, $teamId, $playerId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $player = Player::findOrFail($playerId);
        $playerData = $request->except('photo');

        if ($request->hasFile('photo')) {
            if ($player->photo) {
                unlink(public_path("storage/{$player->photo}"));
            }

            $photoPath = $request->file('photo')->store('photos', 'public');
            $playerData['photo'] = $photoPath;
        }

        $player->update($playerData);

        return redirect()->route('tournaments.stages.teams.players.index', [
            'tournamentId' => $tournamentId,
            'stageId' => $stageId,
            'teamId' => $teamId,
        ])->with('success', 'Player updated successfully.');
    }

    public function destroy($tournamentId, $stageId, $teamId, $playerId)
    {
        $player = Player::findOrFail($playerId);
        $player->delete();

        return redirect()->route('tournaments.stages.teams.players.index', [
            'tournamentId' => $tournamentId,
            'stageId' => $stageId,
            'teamId' => $teamId,
        ])->with('success', 'Player deleted successfully.');
    }
}
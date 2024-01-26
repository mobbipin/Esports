<?php


namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Stage;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index($tournamentId, $stageId)
    {
        $teams = Team::where('stage_id', $stageId)->get();
        return view('tournament.stages.teams.index', compact('teams', 'stageId', 'tournamentId'));
    }

    public function create($tournamentId, $stageId)
    {
        return view('tournament.stages.teams.create', compact('tournamentId', 'stageId'));
    }

    public function store(Request $request, $tournamentId, $stageId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tag' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $teamData = $request->except('logo');
        $teamData['stage_id'] = $stageId;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $teamData['logo'] = $logoPath;
        }

        Team::create($teamData);

        return redirect()->route('tournaments.stages.teams.index', ['tournamentId' => $tournamentId, 'stageId' => $stageId])->with('success', 'Team created successfully.');
    }

    public function show($tournamentId, $stageId, $teamId)
    {
        $team = Team::findOrFail($teamId);
        return view('tournament.stages.teams.show', compact('team', 'tournamentId', 'stageId'));
    }

    public function edit($tournamentId, $stageId, $teamId)
    {
        $team = Team::findOrFail($teamId);
        return view('tournament.stages.teams.edit', compact('team', 'tournamentId', 'stageId'));
    }

    public function update(Request $request, $tournamentId, $stageId, $teamId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tag' => 'required|string|max:255',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $team = Team::findOrFail($teamId);

        $teamData = $request->except('logo');

        if ($request->hasFile('logo')) {
            if ($team->logo) {
                unlink(public_path("storage/{$team->logo}"));
            }

            $logoPath = $request->file('logo')->store('logos', 'public');
            $teamData['logo'] = $logoPath;
        }

        $team->update($teamData);

        return redirect()->route('tournaments.stages.teams.index', ['tournamentId' => $tournamentId, 'stageId' => $stageId])->with('success', 'Team updated successfully.');
    }

    public function destroy($tournamentId, $stageId, $teamId)
    {
        $team = Team::findOrFail($teamId);

        $team->delete();

        return redirect()->route('tournaments.stages.teams.index', ['tournamentId' => $tournamentId, 'stageId' => $stageId])->with('success', 'Team deleted successfully.');
    }
}

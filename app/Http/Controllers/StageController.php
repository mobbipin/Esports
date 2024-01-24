<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{

    public function index($tournamentId)
    {
        $stages = Stage::where('tournament_id', $tournamentId)->get();
        return view('tournament.stages.index', compact('stages', 'tournamentId'));
    }

    public function create($tournamentId)
    {
        return view('tournament.stages.create', compact('tournamentId'));
    }

    public function store(Request $request, $tournamentId)
    {
        $request->validate([
            'stage_name' => 'required|string|max:255',
            'stage_day' => 'required|date',
            'stage_time' => 'required|date_format:H:i',
        ]);

        $stageData = $request->all();
        $stageData['tournament_id'] = $tournamentId;

        Stage::create($stageData);

        return redirect()->route('tournaments.stages.index', $tournamentId)->with('success', 'Stage created successfully.');
    }

    public function show($tournamentId, $stageId)
    {
        $stage = Stage::findOrFail($stageId);
        return view('tournament.stages.show', compact('stage', 'tournamentId'));
    }

    public function edit($tournamentId, $stageId)
    {
        $stage = Stage::findOrFail($stageId);
        return view('tournament.stages.edit', compact('stage', 'tournamentId'));
    }

    public function update(Request $request, $tournamentId, $stageId)
    {
        $request->validate([
            'stage_name' => 'required|string|max:255',
            'stage_day' => 'required|date',
            'stage_time' => 'required|date_format:H:i',
        ]);

        $stage = Stage::findOrFail($stageId);
        $stage->update($request->all());

        return redirect()->route('tournament.stages.index', $tournamentId)->with('success', 'Stage updated successfully.');
    }

    public function destroy($tournamentId, $stageId)
    {
        $stage = Stage::findOrFail($stageId);
        $stage->delete();

        return redirect()->route('tournament.stages.index', $tournamentId)->with('success', 'Stage deleted successfully.');
    }
}

@extends('layouts.app')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Edit Match</h1>
        <hr />
        <form action="{{ route('tournaments.stages.matches.update', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'matchId' => $match->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="match_no" class="form-label">Match Number</label>
                <input type="text" class="form-control" id="match_no" name="match_no" value="{{ $match->match_no }}" required>
            </div>
            <div class="mb-3">
                <label for="match_name" class="form-label">Match Name</label>
                <input type="text" class="form-control" id="match_name" name="match_name" value="{{ $match->match_name }}" required>
            </div>
            <div class="mb-3">
                <label for="team_a_id" class="form-label">Team A</label>
                <select class="form-select" id="team_a_id" name="team_a_id" required>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $match->team_a_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="team_b_id" class="form-label">Team B</label>
                <select class="form-select" id="team_b_id" name="team_b_id" required>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $match->team_b_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="playing_map_name" class="form-label">Playing Map Name</label>
                <input type="text" class="form-control" id="playing_map_name" name="playing_map_name" value="{{ $match->playing_map_name }}" required>
            </div>
            <div class="mb-3">
                <label for="playing_map_photo" class="form-label">Playing Map Photo</label>
                <input type="file" class="form-control" id="playing_map_photo" name="playing_map_photo" accept="image/*">
            </div>
            <!-- Add other form fields as needed -->
            <button type="submit" class="btn btn-primary">Update Match</button>
        </form>
    </div>
@endsection

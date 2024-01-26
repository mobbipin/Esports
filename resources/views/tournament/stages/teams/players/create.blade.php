@extends('layouts.app')

@section('title', 'Add Player')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Add Player</h1>
        <hr />

        <form action="{{ route('tournaments.stages.teams.players.store', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Player Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Player Name" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Player Role</label>
                <input type="text" name="role" class="form-control" id="role" placeholder="Player Role" required>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Player Photo</label>
                <input type="file" name="photo" class="form-control" id="photo" accept="image/*" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Add Player</button>
            </div>
        </form>
    </div>
@endsection

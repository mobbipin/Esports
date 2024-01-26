@extends('layouts.app')

@section('title', 'Edit Player')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Edit Player</h1>
        <hr />
        <form action="{{ route('tournaments.stages.teams.players.update', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId, 'playerId' => $player->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Player Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Player Name" value="{{ $player->name }}" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Player Role</label>
                <input type="text" name="role" class="form-control" id="role" placeholder="Player Role" value="{{ $player->role }}" required>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Player Photo</label>
                <input type="file" name="photo" class="form-control" id="photo" accept="image/*">
            </div>
            <div class="mb-3">
                <img src="{{ asset('storage/' . $player->photo) }}" alt="Player Photo" width="100">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update Player</button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Add Player')

@section('contents')
    <div class="container">
        <h1 class="mb-4">Add Player</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tournaments.stages.teams.players.store', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Player Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Player Role</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ old('role') }}" required>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Player Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Player</button>
        </form>
    </div>
@endsection

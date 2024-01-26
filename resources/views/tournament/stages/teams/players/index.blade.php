@extends('layouts.app')

@section('title', 'Player List')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Player List</h1>
        <hr />

        <div class="mb-3">
            <a href="{{ route('tournaments.stages.teams.players.create', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId]) }}" class="btn btn-primary">Add Player</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($players->isEmpty())
            <p>No players found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($players as $player)
                        <tr>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->role }}</td>
                            <td>
                                @if($player->photo)
                                    <img src="{{ asset('storage/' . $player->photo) }}" alt="Player Photo" width="50">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('tournaments.stages.teams.players.show', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId, 'playerId' => $player->id]) }}" class="btn btn-info">View</a>
                                <a href="{{ route('tournaments.stages.teams.players.edit', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId, 'playerId' => $player->id]) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('tournaments.stages.teams.players.destroy', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId, 'playerId' => $player->id]) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this player?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

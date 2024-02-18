@extends('layouts.app')

@section('contents')
    <div class="container">
        <h1 class="mb-4">Players</h1>
        <a href="{{ route('tournaments.stages.teams.players.create', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId]) }}"
           class="btn btn-primary mb-4">Add Player</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($players as $player)
                    <tr>
                        <td>{{ $player->id }}</td>
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
                            <a href="{{ route('tournaments.stages.teams.players.show', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId, 'playerId' => $player->id]) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('tournaments.stages.teams.players.edit', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId, 'playerId' => $player->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tournaments.stages.teams.players.destroy', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId, 'playerId' => $player->id]) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this player?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No players available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

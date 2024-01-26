@extends('layouts.app')

@section('title', 'Player Details')

@section('contents')
    <div class="container">
        <h1 class="mb-0">{{ $player->name }} Details</h1>
        <hr />
        <dl class="row">
            <dt class="col-sm-3">Player Name</dt>
            <dd class="col-sm-9">{{ $player->name }}</dd>

            <dt class="col-sm-3">Player Role</dt>
            <dd class="col-sm-9">{{ $player->role }}</dd>

            <dt class="col-sm-3">Player Photo</dt>
            <dd class="col-sm-9">
                @if($player->photo)
                    <img src="{{ asset('storage/' . $player->photo) }}" alt="Player Photo" width="100">
                @else
                    N/A
                @endif
            </dd>
        </dl>
    
        <a href="{{ route('tournaments.stages.teams.players.index', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $teamId]) }}" class="btn btn-secondary">Back to Players</a>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Match Details')

@section('contents')
    <div class="container">
        <h1 class="mb-0">{{ $match->match_name }} Details</h1>
        <hr />
        <dl class="row">
            <dt class="col-sm-3">Match Number</dt>
            <dd class="col-sm-9">{{ $match->match_no }}</dd>

            <dt class="col-sm-3">Match Name</dt>
            <dd class="col-sm-9">{{ $match->match_name }}</dd>

            <dt class="col-sm-3">Team A</dt>
            <dd class="col-sm-9">{{ $match->teamA->name }}</dd>

            <dt class="col-sm-3">Team B</dt>
            <dd class="col-sm-9">{{ $match->teamB->name }}</dd>

            <dt class="col-sm-3">Playing Map Name</dt>
            <dd class="col-sm-9">{{ $match->playing_map_name }}</dd>

            <dt class="col-sm-3">Playing Map Photo</dt>
            <dd class="col-sm-9">
                @if($match->playing_map_photo)
                    <img src="{{ asset('storage/' . $match->playing_map_photo) }}" alt="Playing Map Photo" width="100">
                @else
                    N/A
                @endif
            </dd>
            <!-- Add other details as needed -->
        </dl>
        <a href="{{ route('tournaments.stages.matches.index', [$tournamentId, $stageId]) }}" class="btn btn-secondary">Back to Matches</a>
    </div>
@endsection

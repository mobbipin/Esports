@extends('layouts.app')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Tournament Details</h1>
        <hr />
        <dl class="row">
            <dt class="col-sm-3">Tournament Name</dt>
            <dd class="col-sm-9">{{ $tournament->name }}</dd>

            <dt class="col-sm-3">Game Name</dt>
            <dd class="col-sm-9">{{ $tournament->game_name }}</dd>

            <dt class="col-sm-3">Tournament Logo</dt>
            <dd class="col-sm-9">
                @if($tournament->tournament_logo)
                    <img src="{{ asset('storage/' . $tournament->tournament_logo) }}" alt="Tournament Logo" width="100">
                @else
                    N/A
                @endif
            </dd>

            <dt class="col-sm-3">Tournament Details</dt>
            <dd class="col-sm-9">{{ $tournament->tournament_details }}</dd>
        </dl>

        <a href="{{ route('tournaments.edit', $tournament->id) }}" class="btn btn-primary">Edit Tournament</a>
    </div>
@endsection

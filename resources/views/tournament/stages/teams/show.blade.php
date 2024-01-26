@extends('layouts.app')

@section('title', 'Team Details')

@section('contents')
    <div class="container">
        <h1 class="mb-0">{{ $team->name }} Details</h1>
        <hr />
        <dl class="row">
            <dt class="col-sm-3">Team Name</dt>
            <dd class="col-sm-9">{{ $team->name }}</dd>

            <dt class="col-sm-3">Team Tag</dt>
            <dd class="col-sm-9">{{ $team->tag }}</dd>

            <dt class="col-sm-3">Team Logo</dt>
            <dd class="col-sm-9">
                @if($team->logo)
                    <img src="{{ asset('storage/' . $team->logo) }}" alt="Team Logo" width="100">
                @else
                    N/A
                @endif
            </dd>

            <dt class="col-sm-3">Team Description</dt>
            <dd class="col-sm-9">{{ $team->description }}</dd>
        </dl>

    </div>
@endsection

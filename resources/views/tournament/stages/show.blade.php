@extends('layouts.app')

@section('title', 'Stage Details')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Stage Details</h1>
        <hr />
        <dl class="row">
            <dt class="col-sm-3">Stage Name</dt>
            <dd class="col-sm-9">{{ $stage->stage_name }}</dd>

            <dt class="col-sm-3">Stage Day</dt>
            <dd class="col-sm-9">{{ $stage->stage_day }}</dd>

            <dt class="col-sm-3">Stage Time</dt>
            <dd class="col-sm-9">{{ $stage->stage_time }}</dd>
        </dl>
        <a href="{{ route('tournaments.stages.edit', [$tournamentId, $stage->id]) }}" class="btn btn-primary">Edit Stage</a>
    </div>
@endsection

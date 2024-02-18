@extends('layouts.app')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Edit Stage</h1>
        <hr />
        <form action="{{ route('tournaments.stages.update', [$tournamentId, $stage->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="stage_name" class="form-label">Stage Name</label>
                <input type="text" name="stage_name" class="form-control" id="stage_name" value="{{ $stage->stage_name }}" required>
            </div>
            <div class="mb-3">
                <label for="stage_day" class="form-label">Stage Day</label>
                <input type="date" name="stage_day" class="form-control" id="stage_day" value="{{ $stage->stage_day }}" required>
            </div>
            <div class="mb-3">
                <label for="stage_time" class="form-label">Stage Time</label>
                <input type="time" name="stage_time" class="form-control" id="stage_time" value="{{ $stage->stage_time }}" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection

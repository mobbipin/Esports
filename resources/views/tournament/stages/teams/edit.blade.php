@extends('layouts.app')

@section('title', 'Edit Team')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Edit Team</h1>
        <hr />
        <form action="{{ route('tournaments.stages.teams.update', [$team->stage_id, $team->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Team Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Team Name" value="{{ $team->name }}" required>
            </div>
            <div class="mb-3">
                <label for="tag" class="form-label">Team Tag</label>
                <input type="text" name="tag" class="form-control" id="tag" placeholder="Team Tag" value="{{ $team->tag }}" required>
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Team Logo</label>
                <input type="file" name="logo" class="form-control" id="logo" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Team Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Team Description" rows="4" required>{{ $team->description }}</textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection

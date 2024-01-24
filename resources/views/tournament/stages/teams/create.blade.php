@extends('layouts.app')

@section('title', 'Add Team')

@section('contents')
    <div class="container">
        <a href="{{ route('tournaments.stages.teams.create', ['tournamentId' => $tournamentId, 'stageId' => $stageId]) }}">Create Team</a>
  
        <form action="{{ route('tournaments.stages.teams.store', ['tournamentId' => $tournamentId, 'stageId' => $stageId]) }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Team Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Team Name" required>
            </div>
            <div class="mb-3">
                <label for="tag" class="form-label">Team Tag</label>
                <input type="text" name="tag" class="form-control" id="tag" placeholder="Team Tag" required>
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Team Logo</label>
                <input type="file" name="logo" class="form-control" id="logo" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Team Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Team Description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

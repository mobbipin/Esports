@extends('layouts.app')

@section('title', 'Edit Tournament')

@section('contents')
    <div class="container">
        <h1 class="mb-0">Edit Tournament</h1>
        <hr />
        <form action="{{ route('tournaments.update', $tournament->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Tournament Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $tournament->name }}" required>
            </div>

            <div class="mb-3">
                <label for="game_name" class="form-label">Game Name</label>
                <input type="text" name="game_name" class="form-control" id="game_name" value="{{ $tournament->game_name }}" required>
            </div>

            <div class="mb-3">
                <label for="tournament_logo" class="form-label">Tournament Logo</label>
                <input type="file" name="tournament_logo" class="form-control" id="tournament_logo" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="tournament_details" class="form-label">Tournament Details</label>
                <textarea name="tournament_details" class="form-control" id="tournament_details" rows="4" required>{{ $tournament->tournament_details }}</textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection

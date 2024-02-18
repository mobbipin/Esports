@extends('layouts.app')
  
@section('contents')
    <div class="container">
        <h1 class="mb-0">Add Tournaments</h1>
        <hr />
        <form action="{{ route('tournaments.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tournament Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Tournament Name" required>
            </div>
            <div class="mb-3">
                <label for="game_name" class="form-label">Game Name</label>
                <input type="text" name="game_name" class="form-control" id="game_name" placeholder="Game Name">
            </div>
            <div class="mb-3">
                <label for="tournament_logo" class="form-label">Tournament Logo</label>
                <input type="file" name="tournament_logo" class="form-control" id="tournament_logo" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="tournament_details" class="form-label">Tournament Details</label>
                <textarea name="tournament_details" class="form-control" id="tournament_details" placeholder="Tournament Details" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

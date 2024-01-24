@extends('layouts.app')
  
@section('title', 'Add Tournaments')
  
@section('contents')
    <div class="container">
        <h1 class="mb-0">Add Tournaments</h1>
        <hr />
        <form action="{{ route('tournaments.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tournament Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Tournament Name" required>
            </div>
            <div class="mb-3">
                <label for="instaBgURL" class="form-label">Insta Background URL</label>
                <input type="text" name="instaBgURL" class="form-control" id="instaBgURL" placeholder="Insta Background URL">
            </div>
            <div class="mb-3">
                <label for="primaryFontColor" class="form-label">Primary Font Color</label>
                <input type="text" name="primaryFontColor" class="form-control" id="primaryFontColor" placeholder="Primary Font Color">
            </div>
            <div class="mb-3">
                <label for="game" class="form-label">Game</label>
                <input type="text" name="game" class="form-control" id="game" placeholder="Game">
            </div>
            

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

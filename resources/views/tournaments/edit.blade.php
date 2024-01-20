@extends('layouts.app')
  
@section('title', 'Edit tournament')
  
@section('contents')
    <h1 class="mb-0">Edit tournament</h1>
    <hr />
    <form action="{{ route('tournaments.update', $tournament->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $tournament->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $tournament->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">tournament Code</label>
                <input type="text" name="tournament_code" class="form-control" placeholder="tournament Code" value="{{ $tournament->tournament_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $tournament->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
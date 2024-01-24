@extends('layouts.app')
  
@section('title', 'Show tournament')
  
@section('contents')
    <h1 class="mb-0">Detail tournament</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $tournament->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $tournament->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">tournament_code</label>
            <input type="text" name="tournament_code" class="form-control" placeholder="tournament Code" value="{{ $tournament->tournament_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $tournament->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $tournament->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $tournament->updated_at }}" readonly>
        </div>
    </div>
@endsection
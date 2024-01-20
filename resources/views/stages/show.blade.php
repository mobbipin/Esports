@extends('layouts.app')
  
@section('title', 'Show stage')
  
@section('contents')
    <h1 class="mb-0">Detail stage</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $stage->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $stage->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">stage_code</label>
            <input type="text" name="stage_code" class="form-control" placeholder="stage Code" value="{{ $stage->stage_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $stage->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $stage->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $stage->updated_at }}" readonly>
        </div>
    </div>
@endsection
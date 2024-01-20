@extends('layouts.app')
  
@section('title', 'Home stage')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List stage</h1>
        <a href="{{ route('stages.create') }}" class="btn btn-primary">Add stage</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>stage Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($stage->count() > 0)
                @foreach($stage as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->stage_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('stages.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('stages.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('stages.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">stage not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
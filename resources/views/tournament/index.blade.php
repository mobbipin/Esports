@extends('layouts.app')

@section('title', 'TOURNAMENT LOG')


@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Tournaments</h1>
        <a href="{{ route('tournaments.create') }}" class="btn btn-primary">Add Tournament</a>
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
                <th>Tournament Name</th>
                <th>Game Name</th>
                <th>Tournament Logo</th>
                <th>Tournament Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($tournaments->count() > 0)
                @foreach($tournaments as $tournament)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $tournament->name }}</td>
                        <td class="align-middle">{{ $tournament->game_name }}</td>
                        <td class="align-middle">
                            @if($tournament->tournament_logo)
                                <img src="{{ asset('storage/' . $tournament->tournament_logo) }}" alt="Tournament Logo" width="50">
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="align-middle">{{ $tournament->tournament_details }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('tournaments.stages.index', $tournament->id) }}" type="button" class="btn btn-enter">Enter</a>
                                <a href="{{ route('tournaments.show', $tournament->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('tournaments.edit', $tournament->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="6">No tournaments found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

@extends('layouts.app')

@section('title', 'List of Matches')

@section('contents')
    <div class="container">
        <h1 class="mb-0">List of Matches</h1>
        <hr />

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a href="{{ route('tournaments.stages.matches.create', ['tournamentId' => $tournamentId, 'stageId' => $stageId]) }}" class="btn btn-primary">Create Match</a>
        @if($matches->count() > 0)
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Match Number</th>
                        <th>Match Name</th>
                        <th>Team A</th>
                        <th>Team B</th>
                        <th>Playing Map Name</th>
                        <th>Playing Map Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($matches as $match)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $match->match_no }}</td>
                            <td>{{ $match->match_name }}</td>
                            <td>
                                @if($match->team1)
                                    {{ $match->team1->name }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                @if($match->team2)
                                    {{ $match->team2->name }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $match->playing_map_name }}</td>
                            <td>
                                @if($match->playing_map_photo)
                                    <img src="{{ asset('storage/' . $match->playing_map_photo) }}" alt="Playing Map Photo" width="50">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('tournaments.stages.matches.show', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'matchId' => $match->id]) }}" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('tournaments.stages.matches.edit', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'matchId' => $match->id]) }}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('tournaments.stages.matches.destroy', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'matchId' => $match->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No matches found for this stage.</p>
        @endif
    </div>
@endsection

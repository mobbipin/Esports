@extends('layouts.app')

@section('title', 'List of Stages')

@section('contents')
    <div class="container">
        <h1 class="mb-0">List of Stages</h1>
        <hr />
        <a href="{{ route('tournaments.stages.create', $tournamentId) }}" class="btn btn-primary">Add Stage</a>
        @if($stages->count() > 0)
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Stage Name</th>
                        <th>Stage Day</th>
                        <th>Stage Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stages as $stage)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $stage->stage_name }}</td>
                            <td>{{ $stage->stage_day }}</td>
                            <td>{{ $stage->stage_time }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('tournaments.stages.matches.index', [$tournamentId, $stage->id]) }}" type="button" class="btn btn-secondary">Matches</a>
                                    <a href="{{ route('tournaments.stages.teams.index', [$tournamentId, $stage->id]) }}" type="button" class="btn btn-secondary">Teams</a>
                                    <a href="{{ route('tournaments.stages.show', [$tournamentId, $stage->id]) }}" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('tournaments.stages.edit', [$tournamentId, $stage->id]) }}" type="button" class="btn btn-warning">Edit</a>
                                    <!-- You can add a delete button here as well -->
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No stages found for this tournament.</p>
        @endif
    </div>
@endsection

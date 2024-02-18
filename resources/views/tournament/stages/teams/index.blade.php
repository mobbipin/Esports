@extends('layouts.app')

@section('contents')
    <div class="container">
        <h1 class="mb-0">List of Teams</h1>
        <hr />
        <a href="{{ route('tournaments.stages.teams.create', ['tournamentId' => $tournamentId, 'stageId' => $stageId]) }}" class="btn btn-primary">Add Team</a>

        @if($teams->count() > 0)
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Team Name</th>
                        <th>Team Tag</th>
                        <th>Team Logo</th>
                        <th>Team Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->tag }}</td>
                            <td>
                                @if($team->logo)
                                    <img src="{{ asset('storage/' . $team->logo) }}" alt="Team Logo" width="50">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $team->description }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">

                                    <a href="{{ route('tournaments.stages.teams.players.index', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $team->id]) }}" type="button" class="btn btn-secondary">Players</a>
                                    <a href="{{ route('tournaments.stages.teams.show', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $team->id]) }}" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('tournaments.stages.teams.edit', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $team->id]) }}" type="button" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('tournaments.stages.teams.destroy', ['tournamentId' => $tournamentId, 'stageId' => $stageId, 'teamId' => $team->id]) }}" type="button" class="btn btn-danger p-0">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No teams found for this stage.</p>
        @endif
    </div>
@endsection

<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TournamentController1;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\PlayerController;

 
Route::get('/', function () {
    return view('welcome');
});

Route::view("/services", 'services');
Route::view("/contactus", 'contactus');
Route::view("/features", 'features');
Route::view("/portfolio", 'portfolio');

 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournaments.index');
    Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create');
    Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store');
    Route::get('/tournaments/{tournament}', [TournamentController::class, 'show'])->name('tournaments.show');
    Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
    Route::put('/tournaments/{tournament}', [TournamentController::class, 'update'])->name('tournaments.update');
    Route::delete('/tournaments/{tournament}', [TournamentController::class, 'destroy'])->name('tournaments.destroy');


    //route for stages 
    Route::get('/tournaments/{tournamentId}/stages', [StageController::class, 'index'])->name('tournaments.stages.index');
    Route::get('/tournaments/{tournamentId}/stages/create', [StageController::class, 'create'])->name('tournaments.stages.create');
    Route::post('/tournaments/{tournamentId}/stages', [StageController::class, 'store'])->name('tournaments.stages.store');
    Route::get('/tournaments/{tournamentId}/stages/{stage}', [StageController::class, 'show'])->name('tournaments.stages.show');
    Route::get('/tournament/{tournamentId}/stages/{stage}/edit', [StageController::class, 'edit'])->name('tournaments.stages.edit');
    Route::put('/tournaments/{tournamentId}/stages/{stage}', [StageController::class, 'update'])->name('tournaments.stages.update');
    Route::delete('/tournaments/{tournamentId}/stages/{stage}', [StageController::class, 'destroy'])->name('tournaments.stages.destroy');

  
    // Routes for teams
    Route::get('/tournaments/{tournamentId}/stages/{stageId}/teams', [TeamController::class, 'index'])
    ->name('tournaments.stages.teams.index');

    Route::get('/tournaments/{tournamentId}/stages/{stageId}/teams/create', [TeamController::class, 'create'])
        ->name('tournaments.stages.teams.create');

    Route::post('/tournaments/{tournamentId}/stages/{stageId}/teams', [TeamController::class, 'store'])
        ->name('tournaments.stages.teams.store');

    Route::get('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}', [TeamController::class, 'show'])
        ->name('tournaments.stages.teams.show');

    Route::get('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}/edit', [TeamController::class, 'edit'])
        ->name('tournaments.stages.teams.edit');

    Route::put('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}', [TeamController::class, 'update'])
        ->name('tournaments.stages.teams.update');

    Route::delete('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}', [TeamController::class, 'destroy'])
        ->name('tournaments.stages.teams.destroy');





    //routes for matches
    Route::get('/tournaments/{tournamentId}/stages/{stageId}/matches', [MatchesController::class, 'index'])->name('tournaments.stages.matches.index');
    Route::get('/tournaments/{tournamentId}/stages/{stageId}/matches/create', [MatchesController::class, 'create'])->name('tournaments.stages.matches.create');
    Route::post('/tournaments/{tournamentId}/stages/{stageId}/matches', [MatchesController::class, 'store'])
        ->name('tournaments.stages.matches.store');

    Route::get('/tournaments/{tournamentId}/stages/{stageId}/matches/{matchId}', [MatchesController::class, 'show'])
        ->name('tournaments.stages.matches.show');

    Route::get('/tournaments/{tournamentId}/stages/{stageId}/matches/{matchId}/edit', [MatchesController::class, 'edit'])
        ->name('tournaments.stages.matches.edit');

    Route::put('/tournaments/{tournamentId}/stages/{stageId}/matches/{matchId}', [MatchesController::class, 'update'])
        ->name('tournaments.stages.matches.update');

    Route::delete('/tournaments/{tournamentId}/stages/{stageId}/matches/{matchId}', [MatchesController::class, 'destroy'])
        ->name('tournaments.stages.matches.destroy');





    Route::get('/tournaments/{tournamentId}/stages/{stageId}/matches/{matchId}/teaminfo', [MatchesController::class, 'teamInfo'])
        ->name('tournaments.stages.matches.teaminfo');



    
    Route::get('/tournaments/{tournamentId}/stages/{stageId}/matches/{matchId}/teaminfo', [MatchesController::class, 'teamInfo'])
        ->name('tournaments.stages.matches.teaminfo');
    Route::get('/tournament/{tournamentId}/stage/{stageId}/match/{matchId}/teaminfo', 'MatchesController@teamInfo')->name('teaminfo');


    //routes for players 
    Route::get('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}/players', [PlayerController::class, 'index'])
        ->name('tournaments.stages.teams.players.index');

    Route::get('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}/players/create', [PlayerController::class, 'create'])
        ->name('tournaments.stages.teams.players.create');

    Route::post('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}/players', [PlayerController::class, 'store'])
        ->name('tournaments.stages.teams.players.store');

    Route::get('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}/players/{playerId}', [PlayerController::class, 'show'])
        ->name('tournaments.stages.teams.players.show');

    Route::get('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}/players/{playerId}/edit', [PlayerController::class, 'edit'])
        ->name('tournaments.stages.teams.players.edit');

    Route::put('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}/players/{playerId}', [PlayerController::class, 'update'])
        ->name('tournaments.stages.teams.players.update');

    Route::delete('/tournaments/{tournamentId}/stages/{stageId}/teams/{teamId}/players/{playerId}', [PlayerController::class, 'destroy'])
        ->name('tournaments.stages.teams.players.destroy');

    //auth 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
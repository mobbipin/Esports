<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\InfotournaController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');
Route::get('/dashboard/tournaments', [DashboardController::class, 'tournaments'])->name('dashboard.tournaments');
Route::get('/dashboard/teams', [DashboardController::class, 'teams'])->name('dashboard.teams');
Route::get('/dashboard/stages', [DashboardController::class, 'stages'])->name('dashboard.stages');
Route::get('/dashboard/match', [DashboardController::class, 'match'])->name('dashboard.match');
Route::get('/dashboard/info', [DashboardController::class, 'info'])->name('dashboard.info');

// Add more routes as needed




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// routes/web.php
Route::get('/create-tournament', function () {
    return view('tournament'); // Assuming your view file is named 'tournament.blade.php'
});

// Route to load previous tournaments
Route::get('/load-tournaments', [TournamentController::class, 'loadPreviousTournaments']);

// Route to save a new tournament
Route::post('/save-tournament', [TournamentController::class, 'saveTournament']);

// Route to info tournament
Route:: view("/infotourna",'infotourna');


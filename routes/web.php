<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\TournamentController;
=======
>>>>>>> MANISH

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboardesports', [HomeController::class, 'index1']);



<<<<<<< HEAD

=======
>>>>>>> MANISH
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
<<<<<<< HEAD

// routes/web.php
Route::get('/create-tournament', function () {
    return view('tournament'); // Assuming your view file is named 'tournament.blade.php'
});

// Route to load previous tournaments
Route::get('/load-tournaments', [TournamentController::class, 'loadPreviousTournaments']);

// Route to save a new tournament
Route::post('/save-tournament', [TournamentController::class, 'saveTournament']);

=======
>>>>>>> MANISH

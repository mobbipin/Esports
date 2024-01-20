<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TournamentController;
 
Route::get('/', function () {
    return view('welcome');
});
 
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
 
    Route::controller(StageController::class)->prefix('stage')->group(function () {
        Route::get('', 'index')->name('stage');
        Route::get('create', 'create')->name('stages.create');
        Route::post('store', 'store')->name('stages.store');
        Route::get('show/{id}', 'show')->name('stages.show');
        Route::get('edit/{id}', 'edit')->name('stages.edit');
        Route::put('edit/{id}', 'update')->name('stages.update');
        Route::delete('destroy/{id}', 'destroy')->name('stages.destroy');
    });

    Route::controller(TournamentController::class)->prefix('tournaments')->group(function () {
        Route::get('', 'index')->name('tournaments');
        Route::get('create', 'create')->name('tournaments.create');
        Route::post('store', 'store')->name('tournaments.store');
        Route::get('show/{id}', 'show')->name('tournaments.show');
        Route::get('edit/{id}', 'edit')->name('tournaments.edit');
        Route::put('edit/{id}', 'update')->name('tournaments.update');
        Route::delete('destroy/{id}', 'destroy')->name('tournaments.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
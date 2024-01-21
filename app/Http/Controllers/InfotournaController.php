<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfotournaController extends Controller
{
    public function showInfoTournament()
    {
        return view('tournament'); // Assuming your Blade view file is named 'tournament.blade.php'
    }
}
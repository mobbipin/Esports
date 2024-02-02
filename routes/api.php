<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TournamentController extends Controller
{
    //
}

// app/Http/Controllers/TournamentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function saveTournament(Request $request)
    {
        // Validate request and save tournament data
        // Save images and update database accordingly

        return response()->json(['success' => true]);
    }
}

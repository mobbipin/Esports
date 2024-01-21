<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function tournaments()
    {
        return view('dashboard.tournaments');
    }

    public function teams()
    {
        return view('dashboard.teams');
    }

    public function stages()
    {
        return view('dashboard.stages');
    }

    public function match()
    {
        return view('dashboard.match');
    }

    public function info()
    {
        return view('dashboard.info');
    }

    // Implement methods for teams, stages, match, info, etc.
}

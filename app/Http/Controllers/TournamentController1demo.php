<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\tournament;
 
class tournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournament = tournament::orderBy('created_at', 'DESC')->get();
  
        return view('tournaments.index', compact('tournament'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tournaments.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        tournament::create($request->all());
 
        return redirect()->route('tournaments')->with('success', 'tournament added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tournament = tournament::findOrFail($id);
  
        return view('tournaments.show', compact('tournament'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tournament = tournament::findOrFail($id);
  
        return view('tournaments.edit', compact('tournament'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tournament = tournament::findOrFail($id);
  
        $tournament->update($request->all());
  
        return redirect()->route('tournaments')->with('success', 'tournament updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tournament = tournament::findOrFail($id);
  
        $tournament->delete();
  
        return redirect()->route('tournaments')->with('success', 'tournament deleted successfully');
    }
}
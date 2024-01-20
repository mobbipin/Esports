<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\stage;
 
class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stage = stage::orderBy('created_at', 'DESC')->get();
  
        return view('stages.index', compact('stage'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stages.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        stage::create($request->all());
 
        return redirect()->route('stages')->with('success', 'stage added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stage = stage::findOrFail($id);
  
        return view('stages.show', compact('stage'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stage = stage::findOrFail($id);
  
        return view('stages.edit', compact('stage'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stage = stage::findOrFail($id);
  
        $stage->update($request->all());
  
        return redirect()->route('stages')->with('success', 'stage updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stage = stage::findOrFail($id);
  
        $stage->delete();
  
        return redirect()->route('stages')->with('success', 'stage deleted successfully');
    }
}
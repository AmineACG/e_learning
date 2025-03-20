<?php
// app/Http/Controllers/PublicationController.php
namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::all();
        return view('publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Log the request data
        logger($request->all());
    
        // Validate the request data
        $request->validate([
            'titre' => 'required|string|max:255',
            'annee' => 'required|integer',
            'type' => 'required|string|max:255',
            'sujet' => 'required|string|max:255',
            'lien' => 'required|string|max:255',
            'cours_id' => 'required|exists:cours,id',
        ]);
    
        // Create a new publication
        Publication::create($request->all());
    
        // Redirect to the publications index page with a success message
        return redirect()->route('publications.index')->with('success', 'Publication created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);
        return view('publications.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $publication = Publication::findOrFail($id);
        return view('publications.edit', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'sometimes|string|max:255',
            'annee' => 'sometimes|integer',
            'type' => 'sometimes|string|max:255',
            'sujet' => 'sometimes|string|max:255',
            'lien' => 'sometimes|string|max:255',
            'cours_id' => 'sometimes|exists:cours,id',
        ]);

        $publication = Publication::findOrFail($id);
        $publication->update($request->all());
        return redirect()->route('publications.index')->with('success', 'Publication updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->delete();
        return redirect()->route('publications.index')->with('success', 'Publication deleted successfully.');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$voitures = Voiture::all();
        $voitures = Voiture::paginate(5);
        //$voitures = Voiture::simplePaginate(5);

        return view('voitures.index', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voitures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation 

        $validated = $request->validate([
            'immatriculation' => 'required|integer|unique:voitures,immatriculation|digits:10',
            'num_assurance' => 'required|integer',
            'kilometrage' => 'required|integer',
            'date_debut_location' => 'nullable|date',
            'date_fin_location' => 'nullable|date',
            'client_id' => '',
        ]);

        // store db

        Voiture::create($validated);

        // redirection with status

        return redirect()->route('voitures.index')->with('status', 'Voiture Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        return view('voitures.show', compact('voiture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        return view('voitures.edit', compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        // validation 

        $validated = $request->validate([
            'immatriculation' => 'required|integer|unique:voitures,immatriculation,'.$voiture->id.'|digits:10',
            'num_assurance' => 'required|integer',
            'kilometrage' => 'required|integer',
            'date_debut_location' => 'nullable|date',
            'date_fin_location' => 'nullable|date',
            'client_id' => '',
        ]);

        // update db

        $voiture->update($validated);

        // redirection with status

        return redirect()->route('voitures.index')->with('status', 'Voiture Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();

        return redirect()->route('voitures.index')->with('status', 'Voiture Deleted');
    }
}

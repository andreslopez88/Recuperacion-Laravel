<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collaborator = Collaborator::all();
        return view('Collaborator.index', compact('collaborator'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collaborator = Collaborator::all();
        return view('Collaborator.create', compact('collaborator'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collaborator = new Collaborator();
        $collaborator->nif = $request->nif;
        $collaborator->nombre = $request->nombre;
        $collaborator->save();

        return redirect()->route('Collaborator.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collaborator $collaborator)
    {
        return view('Collaborator.show', compact('collaborator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collaborator $collaborator)
    {
        return view('Collaborator.edit', compact('collaborator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collaborator $collaborator)
    {
        $collaborator = new Collaborator();
        $collaborator->nif = $request->nif;
        $collaborator->nombre = $request->nombre;
        $collaborator->save();

        return redirect()->route('Collaborator.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collaborator $collaborator)
    {
        $collaborator->delete();
        return redirect()->route('Collaborator.index');
    }
}

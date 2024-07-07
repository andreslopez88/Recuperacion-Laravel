<?php

namespace App\Http\Controllers;

use App\Models\Viajero;

use Illuminate\Http\Request;

class ViajeroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajeros = Viajero::all();
        return view('viajeros.index', compact('viajeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viajeros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $viajero = new Viajero();
        $viajero->nombre = $request->input('nombre');
        $viajero->direccion = $request->input('direccion');
        $viajero->telefono = $request->input('telefono');
        $viajero->save();
        return redirect()->route('viajeros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viajero = Viajero::find($id);
        return view('viajeros.show', compact('viajero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viajero = Viajero::find($id);
        return view('viajeros.edit', compact('viajero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $viajero = Viajero::find($id);
        $viajero->nombre = $request->input('nombre');
        $viajero->direccion = $request->input('direccion');
        $viajero->telefono = $request->input('telefono');
        $viajero->save();
        return redirect()->route('viajeros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $viajero = Viajero::find($id);
        $viajero->delete();
        return redirect()->route('viajeros.index');
    }
}

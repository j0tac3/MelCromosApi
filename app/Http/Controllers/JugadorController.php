<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return $jugadores;
    }

    public function jugadoresEquipo($idEquipo){
        $jugadores = Jugador::where('equipo_id', $idEquipo)
                                ->get();
        return $jugadores;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required',
            'altura' => 'required',
            'nacionalidad' => 'required',
            'edicion' => 'required',
            'equipo_id' => 'required'
        ]);
        $jugador = Jugador::create($request->all());
        return $jugador;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugador = Jugador::findOrFail($id);
        return $jugador;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugador)
    {
        $jugador->update($request->all());
        return $jugador;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        Jugador::destroy(($jugador->id));
        return $jugador;
    }
}

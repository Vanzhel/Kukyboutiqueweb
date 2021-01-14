<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TipoOfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_Ofertas= Tipo_Oferta::all();
        return response($tipo_Ofertas,200);
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
        $tipo_Oferta=new Tipo_Oferta;
        $tipo_Oferta->nombre=$request->nombre;
        $tipo_Oferta->descripcion=$request->descripcion;
        $tipo_Oferta->save();

        return response($tipo_Oferta,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Oferta  $tipo_Oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Oferta $tipo_Oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_Oferta  $tipo_Oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Oferta $tipo_Oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_Oferta  $tipo_Oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_Oferta $tipo_Oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Oferta  $tipo_Oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Oferta $tipo_Oferta)
    {
        //
    }
}

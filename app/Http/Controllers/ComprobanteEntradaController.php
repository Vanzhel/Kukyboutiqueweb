<?php

namespace App\Http\Controllers;

use App\Models\Comprobante_Entrada;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComprobanteEntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comprobante_Entradas= Comprobante_Entrada::all();
        return response($comprobante_Entradas,200);
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
        $comprobante_Entrada=new Comprobante_Entrada;
        $comprobante_Entrada->nombre=$request->nombre;
        $comprobante_Entrada->estado=$request->estado;
        $comprobante_Entrada->save();

        return response($comprobante_Entrada,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprobante_Entrada  $comprobante_Entrada
     * @return \Illuminate\Http\Response
     */
    public function show(Comprobante_Entrada $comprobante_Entrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprobante_Entrada  $comprobante_Entrada
     * @return \Illuminate\Http\Response
     */
    public function edit(Comprobante_Entrada $comprobante_Entrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comprobante_Entrada  $comprobante_Entrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comprobante_Entrada $comprobante_Entrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprobante_Entrada  $comprobante_Entrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comprobante_Entrada $comprobante_Entrada)
    {
        //
    }
}

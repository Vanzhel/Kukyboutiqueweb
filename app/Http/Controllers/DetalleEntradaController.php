<?php

namespace App\Http\Controllers;

use App\Models\Detalle_Entrada;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DetalleEntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle_Entradas= Detalle_Entrada::all();
        return response($detalle_Entradas,200);
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
        $detalle_Entrada=new Detalle_Entrada;
        $detalle_Entrada->entrada_id=$request->entrada_id;
        $detalle_Entrada->producto_id=$request->producto_id;
        $detalle_Entrada->precio_compra=$request->precio_compra;
        $detalle_Entrada->precio_venta=$request->precio_venta;
        $detalle_Entrada->cantidad=$request->cantidad;
        $detalle_Entrada->descuento=$request->descuento;
        $detalle_Entrada->importe=$request->importe;
        $detalle_Entrada->save();

        return response($detalle_Entrada,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalle_Entrada  $detalle_Entrada
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle_Entrada $detalle_Entrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detalle_Entrada  $detalle_Entrada
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalle_Entrada $detalle_Entrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalle_Entrada  $detalle_Entrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalle_Entrada $detalle_Entrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalle_Entrada  $detalle_Entrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalle_Entrada $detalle_Entrada)
    {
        //
    }
}

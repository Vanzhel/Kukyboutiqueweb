<?php

namespace App\Http\Controllers;

use App\Models\Detallepedido;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DetallepedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallepedidos= Detallepedido::all();
        return response($detallepedidos,200);
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
        $detallepedido=new Detallepedido;
        $detallepedido->pedido_id=$request->pedido_id;
        $detallepedido->producto_id=$request->producto_id;
        $detallepedido->cantidad=$request->cantidad;
        $detallepedido->precio_unitario=$request->precio_unitario;
        $detallepedido->descuento=$request->descuento;
        $detallepedido->importe=$request->importe;
        $detallepedido->save();

        return response($detallepedido,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detallepedido  $detallepedido
     * @return \Illuminate\Http\Response
     */
    public function show(Detallepedido $detallepedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detallepedido  $detallepedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Detallepedido $detallepedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detallepedido  $detallepedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detallepedido $detallepedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detallepedido  $detallepedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detallepedido $detallepedido)
    {
        //
    }
}

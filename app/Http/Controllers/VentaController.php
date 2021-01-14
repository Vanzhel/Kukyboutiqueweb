<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas= Venta::all();
        return response($ventas,200);
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
        $venta=new Venta;
        $venta->fecha=$request->fecha;
        $venta->comprobante_id=$request->comprobante_id;
        $venta->numero_serie=$request->numero_serie;
        $venta->numero_comprobante=$request->numero_comprobante;
        $venta->descuento=$request->descuento;
        $venta->totalpedido=$request->totalpedido;
        $venta->importetotal=$request->importetotal;
        $venta->estado=$request->estado;
        $venta->user_id=$request->user_id;
        $venta->empleado_id=$request->empleado_id;
        $venta->pedido_id=$request->pedido_id;
        $venta->envio=$request->envio;
        $venta->precio_envio=$request->precio_envio;
        $venta->mediopago_id=$request->mediopago_id;
        $venta->save();

        return response($venta,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}

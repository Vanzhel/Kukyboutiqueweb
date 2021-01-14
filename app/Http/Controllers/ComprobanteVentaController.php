<?php

namespace App\Http\Controllers;

use App\Models\Comprobante_Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComprobanteVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comprobante_Ventas= Comprobante_Venta::all();
        return response($comprobante_Ventas,200);
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
        $comprobante_Venta=new Comprobante_Venta;
        $comprobante_Venta->nombre=$request->nombre;
        $comprobante_Venta->estado=$request->estado;
        $comprobante_Venta->save();

        return response($comprobante_Venta,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprobante_Venta  $comprobante_Venta
     * @return \Illuminate\Http\Response
     */
    public function show(Comprobante_Venta $comprobante_Venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprobante_Venta  $comprobante_Venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Comprobante_Venta $comprobante_Venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comprobante_Venta  $comprobante_Venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comprobante_Venta $comprobante_Venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprobante_Venta  $comprobante_Venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comprobante_Venta $comprobante_Venta)
    {
        //
    }
}

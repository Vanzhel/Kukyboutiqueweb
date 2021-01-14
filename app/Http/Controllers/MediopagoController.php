<?php

namespace App\Http\Controllers;

use App\Models\Mediopago;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MediopagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediopagos= Mediopago::all();
        return response($mediopagos,200);
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
        $mediopago=new Mediopago;
        $mediopago->nombre=$request->nombre;
        $mediopago->estado=$request->estado;
        $mediopago->save();

        return response($mediopago,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mediopago  $mediopago
     * @return \Illuminate\Http\Response
     */
    public function show(Mediopago $mediopago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mediopago  $mediopago
     * @return \Illuminate\Http\Response
     */
    public function edit(Mediopago $mediopago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mediopago  $mediopago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mediopago $mediopago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mediopago  $mediopago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mediopago $mediopago)
    {
        //
    }
}

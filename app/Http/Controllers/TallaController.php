<?php

namespace App\Http\Controllers;

use App\Models\Talla;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tallas= Talla::all();
        return response($tallas,200);
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
        $talla=new Talla;
        $talla->nombre=$request->nombre;
        $talla->save();

        return response($talla,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function show(Talla $talla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function edit(Talla $talla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talla $talla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talla $talla)
    {
        //
    }
}

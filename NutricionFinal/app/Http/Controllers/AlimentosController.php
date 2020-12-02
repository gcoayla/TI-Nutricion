<?php

namespace App\Http\Controllers;

use App\Models\Alimentos;
use Illuminate\Http\Request;

class AlimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimento = Alimentos::all();
        return $alimento;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alimento = Alimentos::create($request->all());
        return $alimento;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimentos  $alimentos
     * @return \Illuminate\Http\Response
     */
    public function show(Alimentos $alimentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alimentos  $alimentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alimentos $alimentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alimentos  $alimentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alimentos $alimentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimentos  $alimentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alimentos $alimentos)
    {
        //
    }
}

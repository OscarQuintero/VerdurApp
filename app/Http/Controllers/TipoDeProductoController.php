<?php

namespace App\Http\Controllers;

use App\Models\TipoDeProducto;
use Illuminate\Http\Request;

class TipoDeProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('listatiposdeproductos');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoDeProducto  $tipoDeProducto
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDeProducto $tipoDeProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoDeProducto  $tipoDeProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoDeProducto $tipoDeProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoDeProducto  $tipoDeProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoDeProducto $tipoDeProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoDeProducto  $tipoDeProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDeProducto $tipoDeProducto)
    {
        //
    }
}

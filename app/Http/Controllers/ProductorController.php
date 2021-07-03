<?php

namespace App\Http\Controllers;

use App\Models\Productor;
use Illuminate\Http\Request;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('listaproductores');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productorform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('productorform');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function show(Productor $productor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function edit(Productor $productor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productor $productor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productor $productor)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Conges;
use Illuminate\Http\Request;

class CongesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $conges = new Conges([
            'employer_id' => $request->get('employe'),
            'type_conges_id' =>$request->get('type'),
            'date_debut' => $request->get('date_debut'),
            'date_fin' => $request->get('date_fin'),

        ]);
        $conges->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conges  $conges
     * @return \Illuminate\Http\Response
     */
    public function show(Conges $conges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conges  $conges
     * @return \Illuminate\Http\Response
     */
    public function edit(Conges $conges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conges  $conges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conges $conges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conges  $conges
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conges $conges)
    {
        //
    }
}

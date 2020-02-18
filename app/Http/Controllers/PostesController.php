<?php

namespace App\Http\Controllers;

use App\Postes;
use Illuminate\Http\Request;

class PostesController extends Controller
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
        $this->validate($request, [
            'nom_poste' => 'required',
            'salaire' => 'required']);
        try {
            $poste = new Postes([
                'nom' => $request->get('nom_poste'),
                'salaire' => $request->get('salaire'),
            ]);
            $poste->save();
            return redirect()->back();
        } catch (\Illuminate\Database\QueryException $exception){
            $errorInfo = $exception->errorInfo;
            //throw $exception;
            return redirect()->back()->withErrors(['msg', $errorInfo])->withInput($request->input());
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postes  $postes
     * @return \Illuminate\Http\Response
     */
    public function show(Postes $postes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postes  $postes
     * @return \Illuminate\Http\Response
     */
    public function edit(Postes $postes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postes  $postes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postes $postes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postes  $postes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postes $postes)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Contrat;
use App\Employer;
use App\Postes;
use Illuminate\Http\Request;

class ContratController extends Controller
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
        $employes=Employer::all();
        $contrat=Contrat::all();
        $poste=Postes::all();
        return view('managements', ["employes"=>$employes,"contrat"=>$contrat,"postes"=>$poste] );
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
     * @param  \App\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrat $contrat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $employer_id= $request->get('employer');
            $contrat=Contrat::all();
            foreach ($contrat as $cos){
                if ($cos->employer_id == $employer_id){
                    $cos->status=false;
                    $cos->save();
                }
            }
            return redirect('gestion');
        }catch (\Illuminate\Database\QueryException $exception){
            $errorInfo = $exception->errorInfo;
            //throw $exception;
            return redirect()->back()->withErrors(['msg', $errorInfo])->withInput($request->input());
        }


    }
    public function update2(Request $request)
    {



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrat $contrat)
    {
        //
    }
}

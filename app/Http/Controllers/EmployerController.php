<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Postes;
use App\Contrat;
use App\TypesContrat;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poste= Postes::all();
        $type=TypesContrat::all();
        return   view('ajouter_employer',["postes"=>$poste,"type"=>$type]);
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
        $this->validate($request,[
            'cni' => 'required',
            'nom' => 'required',
            'prenom'=> 'required',
            'date_naissance'=> 'required',
            'lieu_naissance'=> 'required',
            'ville'=> 'required',
            'adresse'=> 'required',
            'telephone'=> 'required',
            'poste_id'=> 'required',
            'email'=> 'required',
            'sexe'=> 'required',
            'date_debut'=> 'required',
            'date_fin'=> 'required',
        ]);

        $poste_id = $request->get('poste');

        $employer = new Employer([
            'cni' => $request->get('cni'),
            'nom' =>$request->get('nom'),
            'prenom'=> $request->get('prenom'),
            'date_naissance'=> $request->get('date_naissance'),
            'lieu_naissance'=> $request->get('lieu_naissance'),
            'ville'=> $request->get('ville'),
            'adresse'=> $request->get('adresse'),
            'telephone'=> $request->get('telephone'),
            'poste_id'=> $poste_id ,
            'email'=> $request->get('email'),
          //  'sexe'=> $request->get('sexe'),
        // creer le champs sexe dans la vue
        ]);
        $employer->save();
        $type = $request->get('type');

        $contrat=new Contrat([
            'id_employer'=>$employer->id,
            'type_id' => $type,
            'date_debut' => $request->get('date_debut'),
            'date_fin' => $request->get('date_fin'),
        ]);
        $contrat->save();


        return redirect()->route('gestion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        //
    }
}

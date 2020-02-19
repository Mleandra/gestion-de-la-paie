<?php

namespace App\Http\Controllers;

use App\TypesConges;
use Illuminate\Http\Request;

class TypesCongesController extends Controller
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
                'nom' => 'required',
               ]);
            try {
                $paye=$request->get('est_payer');
                if ($paye==1){
                    $paye = $request->get('est_payer');
                    } else{
                    $paye = false;
                    }
                $type= new TypesConges([
                    'nom' => $request->get('nom'),
                    'est_payer'=>$paye


                ]);
                $type->save();
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
     * @param  \App\TypesConges  $typesConges
     * @return \Illuminate\Http\Response
     */
    public function show(TypesConges $typesConges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypesConges  $typesConges
     * @return \Illuminate\Http\Response
     */
    public function edit(TypesConges $typesConges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypesConges  $typesConges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypesConges $typesConges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypesConges  $typesConges
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypesConges $typesConges)
    {
        //
    }
}

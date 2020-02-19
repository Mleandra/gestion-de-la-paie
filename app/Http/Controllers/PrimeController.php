<?php

namespace App\Http\Controllers;

use App\Prime;
use App\Employer;
use Illuminate\Http\Request;

class PrimeController extends Controller
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
            'employer' => 'required',
            'montant' => 'required',
            'raison' => 'required',]);
        try {
            $prime = new Prime([
                'employer_id' => $request->get('employer'),
                'montant' => $request->get('montant'),
                'motif' => $request->get('raison'),
                'date' => date('Y-m-d')
            ]);
            $prime->save();
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
     * @param  \App\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function show(Prime $prime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function edit(Prime $prime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prime $prime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prime $prime)
    {
        //
    }
}

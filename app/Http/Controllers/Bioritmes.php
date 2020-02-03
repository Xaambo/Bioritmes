<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Datetime;

class Bioritmes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $nom = 'Jordi';
        
        return view('index',['nom'=>$nom]); 
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
        $nom = $request->input('name');
        
        $dataNeixement = $request->input('birthdate');
        $dataNeixement = new DateTime($dataNeixement);

        $sysdate = getdate();
        $sysdate = new DateTime("$sysdate[year]/$sysdate[mon]/$sysdate[mday]");

        $diff = $dataNeixement->diff($sysdate);
        $dies = $diff->days;

        $percentatgeFisic = (sin(2*pi()*$dies/23) + 1) * 50;
        $percentatgeEmocional = (sin(2*pi()*$dies/28) + 1) * 50;
        $percentatgeIntelectual = (sin(2*pi()*$dies/33) + 1) * 50;

        if ($dataNeixement > $sysdate) {
            return view('index',['nom'=>'Index per tonto']);
        }

        return view('resum',['nomUsuari'=>$nom, 'dataNeixement'=>$dataNeixement->format('d/m/Y'), 'dies'=>$dies, 'progresFis'=>$percentatgeFisic, 'progresEmo'=>$percentatgeEmocional, 'progresInt'=>$percentatgeIntelectual]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

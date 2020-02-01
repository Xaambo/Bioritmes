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
        $sysdate = new DateTime(date('d/m/Y'));

        $diff = $dataNeixement->diff($sysdate);
        $dies = $diff->days;

        if ($dataNeixement > $sysdate) {
            return view('index',['nom'=>'Index per tonto']);
        }

        return view('resum',['dies'=>$dies]);
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

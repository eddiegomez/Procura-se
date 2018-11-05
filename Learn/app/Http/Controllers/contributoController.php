<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\pessoa_perdida;
use Illuminate\Support\Facades\DB;

class contributoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "gfwefe";
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$pessoa_perdida = DB::select('select * from pessoa_perdida p, contributos c where p.id_p_perdida = ""$id"');
        /*$pessoa_perdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->select('pessoa_perdida.*', 'contributos.*','foto.nome_foto')
            ->where('pessoa_perdida.id', '=', $id);*/

            $pessoa_perdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->select('pessoa_perdida.*','foto.*')
            ->where('pessoa_perdida.id_p_perdida', "$id")
            ->first();

            $contributos = DB::table('contributos')->where('contributos.id_p_perdida', "$id")->get();

        return view('pessoa_perdida.contributos', compact('pessoa_perdida','contributos'));
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

<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\Pessoa_perdida;
use Illuminate\Support\Facades\DB;


class casoController extends Controller
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
        $perdida = Pessoa_perdida::find($id);
        $perdida->estado = 0;
        $perdida->save();

         $pessoa_perdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->join('caso', 'caso.id_pessoa_perdida', '=', 'pessoa_perdida.id_p_perdida')
            ->join('localizacao', 'localizacao.id_localizacao', '=', 'caso.id_localizacao')
            ->select('pessoa_perdida.*', 'foto.nome_foto', 'localizacao.nome_localizacao')
            ->where('pessoa_perdida.estado','=','1')
            ->orderBy('id_p_perdida','desc')
            ->paginate(6);
        
        return view('admin.user', compact('pessoa_perdida'))->with('pessoa_perdida',$pessoa_perdida);
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

<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\pessoa_perdida;

class pessoaPerdidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa_perdida = Pessoa_perdida::all();
        return view('pessoa_perdida.index', compact('pessoa_perdida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoa_perdida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
         if($request->hasFile('foto')){
            $file = $request->file('foto');
            //$name = time().$file->getClientOriginalName();
            $file ->move(public_path().'/imgs_p_perdidas/',$name);
        }
        $p_perdida = new Pessoa_perdida();
        $p_perdida->nome = $request->input('nome');
        $p_perdida->sexo = $request->input('sexo');
        $p_perdida->data_nasc = $request->input('d_nasc');
        $p_perdida->nacionalidade = $request->input('nacionalidade');
        $p_perdida->naturalidade = $request->input('naturalidade');
        //$p_perdida->foto = $name;
        //$p_perdida->save();
        return view('pessoa_ajuda.create');
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

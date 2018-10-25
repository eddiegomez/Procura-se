<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\centro_acolhimento;

class centroAcolhimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centro_acolhimento = centro_acolhimento::all();
        
        return view('admin.centros.index', compact('centro_acolhimento'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.centros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $centro = new centro_acolhimento();
        $centro->designacao = $request->input('designacao');
        $centro->tipo = $request->input('tipo');
        $centro->capacidade = $request->input('capacidade');
        $centro->email = $request->input('email');
        $centro->celular = $request->input('celular');
        $centro->provincia = $request->input('provincia');
        $centro->avenida = $request->input('avenida');
        $centro->numero = $request->input('nr');
        $centro->obs = $request->input('obs');
        $centro->id_localizacao = 1;
        $centro->save();
        //return view('admin.centros.create')->with('message', ' created successfully!');
        redirect('/centro')->with('sucess', ' created successfully!');
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

<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\pessoa_ajuda;
use Laravel_Learn\user;

class pessoaAjudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa_ajuda = pessoa_ajuda::all();
        return view('pessoa_ajuda.index', compact('pessoa_ajuda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoa_ajuda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usr = new user();
        $usr->usuario = $request->input('usuario');
        $usr->senha = $request->input('senha');
        $usr->tipo = 'pessoa_ajuda';
        $usr->save();
/*
        $p_ajuda = new pessoa_ajuda();
        $p_ajuda->nome = $request->input('nome');
        $p_ajuda->email = $request->input('email');
        $p_ajuda->id_usuario = 1;
        $p_ajuda->password = $request->input('senha');
        $p_ajuda->save();
        return 'saved';
    */
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

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

        $user = new user();


        $p_ajuda = new pessoa_ajuda();
        $p_ajuda->nome = $request->input('nome');
        $p_ajuda->sexo = $request->input('sexo');
        $p_ajuda->data_nasc = $request->input('d_nasc');
        $p_ajuda->morada = $request->input('morada');
        $p_ajuda->telefone = $request->input('telefone');
        $p_ajuda->email = $request->input('email');

        $p_ajuda->id_usuario = $user->guardar($request);
        $p_ajuda->save();
        return redirect()->route('pessoa_perdida.index')->with('message', ' created successfully!');
    

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
        $p_ajuda = \Laravel_Learn\Pessoa_ajuda::find($id);
        return view('edit',compact('p_ajuda,id'));
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
        $usr = new user();
        $usr->usuario = $request->input('usuario');
        $usr->senha = $request->input('senha');
        $usr->tipo = 'pessoa_ajuda';

        $p_ajuda = new pessoa_ajuda();
        $p_ajuda->nome = $request->input('nome');
        $p_ajuda->sexo = $request->input('sexo');
        $p_ajuda->data_nasc = $request->input('d_nasc');
        $p_ajuda->morada = $request->input('morada');
        $p_ajuda->telefone = $request->input('telefone');
        $p_ajuda->email = $request->input('email');
        $p_ajuda->id_usuario = 1;
        $p_ajuda->save();
        return 'saved';

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

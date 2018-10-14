<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\responsavel_centro;
use Laravel_Learn\user;

class responsavelCentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       return 'indice';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_resp_centro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new user;
        
        $resp = new responsavel_centro();
        $resp->nome = $request->input('nome');
        $resp->data_nasc = $request->input('data_nasc');
        $resp->contacto = $request->input('contacto');
        $resp->sexo = $request->input('sexo');
        $resp->tipo_documento = $request->input('tipo_doc');
        $resp->numero_doc = $request->input('numero_doc');
        $resp->email = $request->input('email');
        $resp->id_usuario = $user->guardar_user($request);
        $resp->id_centro = 1;
        $resp->save();
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

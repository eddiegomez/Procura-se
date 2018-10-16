<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\Http\Requests\StorePessoaPerdida;
use Laravel_Learn\pessoa_perdida;
use Illuminate\Support\Facades\Storage;
use Laravel_Learn\Caso;
use Illuminate\Support\Facades\DB;

class pessoaPerdidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $pessoa_perdida = Pessoa_perdida::all();

        $pessoa_perdida = Pessoa_perdida::orderBy('id_p_perdida', 'desc')->paginate(6);
        return view('pessoa_perdida.index', compact('pessoa_perdida'))->with('pessoa_perdida',$pessoa_perdida);
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
    public function store(StorePessoaPerdida $request)
    {



        return redirect()->route('pessoa_perdida.index')->with('message', ' created successfully!');



    }

    public function gravar_caso($id)
    {
        //

        return $id;
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
    public function pesquisar(Request $request)
    {
        $pesquisar = $request->input('pesquisar');

        if($pesquisar){
            $pessoa_perdida = Pessoa_perdida::where('nome','LIKE','%'. $pesquisar . '%')
                ->orWhere('nacionalidade', 'LIKE', '%' . $pesquisar .'%')
                ->orWhere('sexo', 'LIKE', '%' . $pesquisar .'%')
                ->get();
            return view('pessoa_perdida.pesquisa', compact('pessoa_perdida', 'pesquisar'));
        }
        return view('pessoa_perdida.index')->withmessage('nao e possivel encontrar o dado');
    }
}

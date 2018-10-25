<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\Http\Requests\StorePessoaPerdida;
use Laravel_Learn\pessoa_perdida;
use Illuminate\Support\Facades\Storage;
use Laravel_Learn\Caso;
use Laravel_Learn\foto;
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
//      

        $pessoa_perdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->join('caso', 'caso.id_pessoa_perdida', '=', 'pessoa_perdida.id_p_perdida')
            ->join('localizacao', 'localizacao.id_localizacao', '=', 'caso.id_localizacao')
            ->select('pessoa_perdida.*', 'foto.nome_foto', 'localizacao.nome_localizacao')
            ->orderBy('id_p_perdida','desc')
            ->paginate(6);

        //$pessoa_perdida = Pessoa_perdida::orderBy('id_p_perdida','desc')->paginate(6);
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

       
        $p_perdida = new Pessoa_perdida();
        $foto = new foto();

        $p_perdida->nome = $request->input('nome');
        $p_perdida->sexo = $request->input('sexo');
        $p_perdida->data_nasc = $request->input('d_nasc');
        $p_perdida->nacionalidade = $request->input('nacionalidade');
        $p_perdida->naturalidade = $request->input('naturalidade');
        $p_perdida->id_foto = $foto->guardar_foto($request);
        $p_perdida->save();
        $id=$p_perdida->id_p_perdida;

        if(!($id==null)){ 
            $caso = new Caso();
            $caso->guardar_caso($id);
            return redirect()->route('pessoa_perdida.create')->with('sucess', ' created successfully!');
        }else
            return redirect()->route('pessoa_perdida.create')->with('message', 'Ocorreu um erro ao gravar');
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
    public function pesquisar2(Request $request)
    {
        $pesquisar = $request->get('texto');

        if($pesquisar){
            $pessoa_perdida = Pessoa_perdida::where('nome','LIKE','%'. $pesquisar . '%')
                ->orWhere('nacionalidade', 'LIKE', '%' . $pesquisar .'%')
                ->orWhere('sexo', 'LIKE', '%' . $pesquisar .'%')
                ->get();
            return response()->json($pessoa_perdida);
        }
//        return view('pessoa_perdida.index')->withmessage('nao e possivel encontrar o dado');
    }
    public function uniao()
    {
        $resultados = DB::table('caso')
            ->join('pessoa_perdida', 'caso.id_pessoa_perdida', '=', 'pessoa_perdida.id_p_perdida')
            ->join('localizacao', 'localizacao.id_localizacao', '=', 'caso.id_localizacao')
            ->select('caso.*', 'pessoa_perdida.nome', 'localizacao.*')
            ->get();
    }
}

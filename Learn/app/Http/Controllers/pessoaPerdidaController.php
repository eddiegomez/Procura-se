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
<<<<<<< HEAD
        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgs_p_perdidas/',$name);
        }
     
=======
    
       $file = $request->file('foto');//busca a imagem de um input do tipo file
       $name = time().$file->getClientOriginalName();//concatena a data e a hora actual ao nome da imagem para que n hajam conflitos
       $file->move(public_path().'/imgs_p_perdidas/',$name);//efectua uma copia da imagem a pasta do projecto     
>>>>>>> 8a843e429c14dcbea32c64e8729e8532f724e0a7
        $p_perdida = new Pessoa_perdida();
        $p_perdida->nome = $request->input('nome');
        $p_perdida->sexo = $request->input('sexo');
        $p_perdida->foto = $name;//aqui mando o nome da img a base de dados
        $p_perdida->data_nasc = $request->input('d_nasc');
        $p_perdida->nacionalidade = $request->input('nacionalidade');
        $p_perdida->naturalidade = $request->input('naturalidade');
        $p_perdida->foto = $name;
        $p_perdida->save();
        $id=$p_perdida->id_p_perdida;
        $this->gravar_caso($id);

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

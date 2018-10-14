<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\Http\Requests\StorePessoaPerdida;
use Laravel_Learn\pessoa_perdida;
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
        //$pessoa_perdida = DB::table('pessoa_perdida')->get();   
        //return view('pessoa_perdida.index', ['pessoa_perdida' => $pessoa_perdida]);
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
    public function store(StorePessoaPerdida $request)
    {
        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgs_p_perdidas/',$name);
        }
     
        $p_perdida = new Pessoa_perdida();
        $p_perdida->nome = $request->input('nome');
        $p_perdida->sexo = $request->input('sexo');
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
    public function search()
    {
//        // Gets the query string from our form submission
//        $query = Request::input('pesquisar');
//        // Returns an array of articles that have the query string located somewhere within
//        // our articles titles. Paginates them so we can break up lots of search results.
//        $articles = Pessoa_perdida::where('nome', 'LIKE', '%' . $query . '%')->get()->paginate(10);
//
//        // returns a view and passes the view the list of articles and the original query.
//        return view('pessoa_perdida.index', compact('articles', 'query'));
//
        // outro methodo
        $pesquisar = Input::get('pesquisar');
        if($pesquisar!=""){
            $p_perdida = Pessoa_perdida::where('nome','LIKE','%' .$pesquisar .'%')
                ->orwhere('nacionalidade', 'LIKE', '%' .$pesquisar .'%')
                ->get();
            if(count($p_perdida)>0)
                return view('pessoa_perdida.index')->withDetails($p_perdida)->withQuery($pesquisar);
        }
        return view('pessoa_perdida.index')->withmessage('nao e possivel encontrar o dado');
    }
    public function pesquisar(Request $request)
    {
        $pesquisar = $request->input('pesquisar');

        if($pesquisar){

            $pessoa_perdida = Pessoa_perdida::where('nome','LIKE','%'. $pesquisar . '%')
//        $p_perdida = \Laravel_Learn\Pessoa_perdida::where('nome','LIKE','%' .$pesquisar .'%')
                ->orWhere('nacionalidade', 'LIKE', '%' . $pesquisar .'%')

                ->get();

            return view('pessoa_perdida.index', compact('pessoa_perdida', 'pesquisar'));
        }
        return view('pessoa_perdida.index')->withmessage('nao e possivel encontrar o dado');
    }
}

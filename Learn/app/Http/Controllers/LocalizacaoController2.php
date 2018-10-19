<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\Localizacao;


class LocalizacaoController2 extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $localizacao = Localizacao::all();;
        $dados = response()->json($localizacao);
        return view('localizacao.index', compact('dados'));
    }

}

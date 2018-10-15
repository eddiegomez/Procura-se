@extends('layouts.app')

@section('title', 'PessoaAjuda')
@section('content')

        <div id="list" class="row">
            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome </th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Morada</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th class="actions">Ações</th>
                    </tr>
                    </thead>
                    @foreach($pessoa_ajuda as $loc)
                        <tbody>

                        <tr>
                            <td>{{$loc ->id_pessoa_ajuda}}</td>
                            <td>{{$loc ->nome}}</td>
                            <td>{{$loc ->sexo}}</td>
                            <td>{{$loc ->data_nasc}}</td>
                            <td>{{$loc ->morada}}</td>
                            <td>{{$loc ->telefone}}</td>
                            <td>{{$loc ->email}}</td>
                            <td class="actions">
                                {{--<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>--}}
                                {{--<a class="btn btn-warning" href="{{action('pessoaAjudaController@edit',$loc['id'])}}">Editar</a>--}}
                                <a class="btn btn-danger "  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>

@endsection
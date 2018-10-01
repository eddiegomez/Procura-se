@extends('layouts.app')
@section('title','Registo de pessoa de Ajuda')
<style type="text/css">
    .form-group{
        top: 20px;
        position: relative;
    }
    .conteiner{
     margin: 35px;
    }

</style>
@section('content')
<ol class="breadcrumb">
    <li><a href="/">Pagina inicial</a></li>
    <li><a>Registo de pessoa perdida</a></li>
    <li><a class="active">Dados pessoais</a></li>
</ol>

<form method="post" class="form-group" action="/pessoa_ajuda" enctype="multipart/form-data" style="margin-left: 240px;margin-right: 240px;">
    <h2>Dados Pessoais</h2>
    <div class="conteiner">
        @csrf 
        <div class="col-sm-12  form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="nome completo">
        </div>

        <div class="col-sm-12  form-group">
            <div class="col-sm-2">
                <label for="sexo">Sexo:</label>
            </div>
            <div class="col-sm-6">
                <label>M: <input type="radio" name="sexo"></label><br>
                <label>F: <input type="radio" name="sexo"></label>
            </div>
        </div>

        <div class="col-sm-12  form-group">
            <label for="nome">Data de nascimento:</label>
            <input type="date" class="form-control" name="d_nasc" placeholder="DD/MM/AAAA">
        </div>

        <div class="col-sm-12  form-group">
            <label for="morada">Morada:</label>
            <input type="text" class="form-control" name="morada" placeholder="Provincia, Bairro, Avenida, Q., casa">
        </div>

        <div class="col-sm-12  form-group">
            <label for="naturalidade">Email:</label>
            <input type="Email" class="form-control" name="email" placeholder="exemplo@dominio.com">
        </div>

        <div class="col-sm-12  form-group">
            <label for="usuario">Username:</label>
            <input type="text" class="form-control" name="usuario" placeholder="ex: user1">
        </div>

        <div class="col-sm-12  form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" name="senha" placeholder="8 digitos no minimo">
        </div>

        <div class="col-sm-12  form-group">
            <input type="password" class="form-control" name="senha" placeholder="confirmação">
        </div>
    </div>
    <input type="submit" class="btn btn-success" style="float: right;position: relative;top: 40px" name="Registar">
</form>


@endsection

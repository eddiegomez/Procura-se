@extends('layouts.app')
@section('title','Registo de pessoa perdida')
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
<ol class="breadcrumb" style="position: fixed;top: 90px">
    <li><a href="/">Pagina inicial</a></li>
    <li><a class="active">Registo de pessoa perdida</a></li>
</ol>

<form method="post" class="form-group" action="/pessoa_perdida" enctype="multipart/form-data" style="margin-left: 140px;margin-right: 140px;top: 110px">
    <h2>Registo de pessoa perdida</h2>
    <div class="conteiner">
        @csrf 
        <div class="col-sm-6  form-group">
            <label for="apelido">Apelido:</label>
            <input type="text" class="form-control" id="apelido" name="apelido" placeholder="apelido">
        </div>

        <div class="col-sm-6  form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="outros nomes">
        </div>

        <div class="col-sm-6  form-group">
            <div class="col-sm-2">
                <label for="sexo">Sexo:</label>
            </div>
            <div class="col-sm-6">
                <label>M: <input type="radio" name="sexo"></label><br>
                <label>F: <input type="radio" name="sexo"></label>
            </div>
        </div>

        <div class="col-sm-6  form-group">
            <label for="nome">Data de nascimento:</label>
            <input type="date" class="form-control" id="d_nasc" name="d_nasc" placeholder="outros nomes">
        </div>

        <div class="col-sm-6  form-group">
            <label for="nacionalidade">Nacionalidade:</label>
            <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="nacionalidade">
        </div>

        <div class="col-sm-6  form-group">
            <label for="naturalidade">Naturalidade:</label>
            <input type="text" class="form-control" id="nacionalidade" name="naturalidade" placeholder="naturalidade">
        </div>

        <div class="col-sm-6  form-group">
            <label for="obs">Observação:</label>
            <textarea  class="form-control" name="obs" placeholder="Informação adicional referente a pessoa perdida" rows="8"></textarea> 
        </div>
        <div class="col-sm-6 form-group">
            <center>
                <div style="top: 20px;position: relative; width:120px;height: 135px; background-color: gray">
                
                </div>
            </center>
            <input type="file" class="form-control" name="foto" style="top: 30px;position: relative;" >
        </div>    

        <div class="col-sm-12" style="background-color: blue; height: 100px;top: 20px; position: relative;">
            
        </div>

    </div>
    <input type="submit" class="btn btn-success" style="float: right;position: relative;top: 40px" name="Registar">
</form>


@endsection

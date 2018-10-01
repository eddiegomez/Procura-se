@extends('layouts.app')
@section('title','Registo de treinadores')
@section('content')

<form method="post" class="form-group" action="/trainers" enctype="multipart/form-data">
    @csrf 
    <h1 class="">Registo de treinadores</h1>

<div class="conteiner">
	<div class="form-group">
        <label >Nome: </label>
        <input  class="form-control" type="text" name="nome">
    </div>
    <div class="form-group">
        
        <input  class="" type="file" name="avatar">
    </div>
        <button type="submit" class="btn btn-primary">Guardar</button>    
	</div>
</form>


@endsection



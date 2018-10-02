@extends('layouts.app')
@section('title','Pagina Inicial')
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

@section('content')
<center>
<div class="row" style="margin-left: 100px; margin-right: 100px; top: 20px; position: relative;">
	@foreach($pessoa_perdida as $p_perdida)
	<div class="col-lg-3">
			<div class="card" style="width: 18rem">
				<img class="card-img-top" src="imgs_p_perdidas/{{$p_perdida->foto}}">
				<div class="card-body">

					<h3 class="card-title">{{$p_perdida->nome}}</h3>
					<h5 class="card-text">Idade: {{$p_perdida->data_nasc}}</h5>
				</div>	
				<p><a class="btn btn-lg btn-primary" href="" role="button">Ver detalhes &raquo;</a></p>			
			</div>
	</div>
	
	@endforeach
</div>
</center>
@endsection

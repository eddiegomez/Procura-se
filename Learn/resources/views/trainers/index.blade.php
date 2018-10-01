@extends('layouts.app')
@section('title','Registo de treinadores')
@section('content')
<div class="conteiner" style="margin-left: 120px; margin-right: 120px">
	<div class="pull-right">
		<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModalcad">cadastrar</button>
	</div>
	
	<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center" id="myModalLabel">Cadastrar</h4>
				</div>
				<div class="modal-body">

				</div>
			</div>
		</div>
		
	</div>

<div class="row">
	@foreach($trainersd as $trainer)
	<div class="col-sm-12">
		<div class="card" style="width: 18rem">
			<div class="card-body">
			<h5 class="card-title">{{$trainer->name}}</h5>
			<p class="card-text"> Descricao do elemento/ pessoa perdida</p>
			<a href="#" class="btn btn-primary">Detalhes</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
</div>
@endsection



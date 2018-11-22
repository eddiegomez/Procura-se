@extends('layouts.app') 
@section('title','Procura-se (Administrativo)')
@yield('content')

<div class="wrapper" style="background-color: #F8F8FF">
    <div class="sidebar" data-color="azure" data-image="/images/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                   PROCURA-SE
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/front-admin">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-menu"></i>
                        <p>Pessoas perdidas</p>
                    </a>
                </li>
                <li>
                    <a href="/centro">
                        <i class="pe-7s-map-marker"></i>
                        <p>Centros</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-users"></i>
                        <p>Ususarios</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-science"></i>
                        <p>Casos de sucesso</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
   @include('inc.navbar2')

   <nav aria-label="breadcrumb" style="left: 15px;position: relative;"> 
        <ol class="breadcrumb"> 
            <li class="breadcrumb-item"><a href="/front-admin">Admin</a></li> 
            <li class="breadcrumb-item current" aria-current="page">Pessoas perdidas</li> 
        </ol> 
    </nav>


    <div class="col-md-4" style="left: -240px">
      <a href="/create">
      <button type="submit" class="btn btn-info btn-fill pull-right">Adicionar</button>
    </a>
    </div>

	<div class="content col-md-12" style="top: -190px;position: relative;">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Pessoas Perdidas</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Idade</th>
                        <th>Data de Registo</th>
                        <th>Localizacao actual</th>
                        <th>Operação</th>
                        <th>Mais</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($pessoa_perdida as $p_perdida)
                      <tr>
                        <td>{{$p_perdida->id_p_perdida}}</td>
                        <td class="py-1"><img src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}" alt="image" /></td>
                        <td>{{$p_perdida->nome}}</td>
                        <td>{{$p_perdida->sexo}}</td>
                        <td>{{\Laravel_Learn\Pessoa_perdida::calcularIdade($p_perdida->data_nasc)}}</td>
                        <td>{{\Laravel_Learn\Pessoa_perdida::calcularDias($p_perdida->created_at)}}</td>
                        <td>{{$p_perdida->nome_localizacao}}</td>
                        <td><a class="btn btn-success" href="/caso/{{$p_perdida->id_p_perdida}}/edit">Encontrada</a></td> 
                        <td><a class="btn btn-sucess" href="/pessoa_perdida/{{$p_perdida->id_p_perdida}}/edit">Editar</a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



</div>
</div>

<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


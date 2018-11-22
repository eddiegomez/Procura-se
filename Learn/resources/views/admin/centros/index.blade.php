@extends('layouts.app')
@section('title','Procura-se (Administrativo)')


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
                <li class="">
                    <a href="/user">
                        <i class="pe-7s-map-marker"></i>
                        <p>Pessoas perdidas</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-user"></i>
                        <p>Centros</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-note2"></i>
                        <p>Ususarios</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-news-paper"></i>
                        <p>Minha Conta</p>
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
    
@include('inc.navbar2')
    <nav aria-label="breadcrumb" style=" left: 300px; position: relative;"> 
        <ol class="breadcrumb"> 
            <li class="breadcrumb-item"><a href="/front-admin">Admin</a></li>
            <li class="breadcrumb-item current" aria-current="page">Centros</li> 
        </ol> 
    </nav>

    <div class="col-md-4" style="right: 20px">
      <a href="/create_centro">
      <button type="submit" class="btn btn-info btn-fill pull-right">Novo Centro</button>
    </a>
    </div>
     <div style="width: : 100%; height: 100px;">
       @include('inc.messages')
   </div>
   <div class="col-sm-10" style="left: 290px">
        <center>
            
<div class="col-sm-10" style="position: relative; margin: 12px;top: -45px" >
    @foreach($centro_acolhimento as $centro)
    <div class="col-sm-4">
        <div class="card" style="width: 15rem; border-radius: 15px; box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);margin-left: 20px">
        <img class="card-img-top rounded-circle" src="/imgs_p_perdidas/{{$centro->foto}}" style=" width: 180px; height: 180px; TOP: 10PX; position: relative;">
            <div class="card-body" id="pesquisar">
                <h2 class="">{{$centro->designacao}}</h2>
                
            </div>
            <p><a class="btn btn-info btn-fill" href="/mapa"  role="button">Mostrar no Mapa</a></p>
        </div>
    </div>

    
    @endforeach
        

</div>
</center>
</div>


        <main class="row">
            @yield('content')
        </main>

</div>

<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>



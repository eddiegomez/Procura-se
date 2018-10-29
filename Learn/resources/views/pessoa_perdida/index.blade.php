@extends('layouts.app')
@section('title','Pagina Inicial')
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>" type="text/css" rel="stylesheet">
<script src="public/jquery-3.3.1.min.js"></script>

@section('content')

<<<<<<< HEAD
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);">
    <div class="text-center d-flex justify-content-center">
        <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
    </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item active">
            <a href="#" class="nav-link">
            <i class="pe-7s-home"></i>Pagina Inicial</a>
          </li>
          <li class="nav-item">
            <a href="/pessoa_perdida/create/" class="nav-link">
            <i class="pe-7s-add-user"></i>Pessoa Perdida</a>
          </li>
            <li>
                <a><form  method="POST" action="{{URL::to('/search')}}"role="search">
                        @csrf
                        <div class="col-md-auto" >
                            <div class="form-group">
                                <label>Pesquisar</label>
                                <input type="text" id="entrada" onkeypress="pesquisar()" name="pesquisar" class="form-control" value="{{ isset($pesquisar) ? $pesquisar : '' }}" placeholder="pesquisar pelo nome" style="text-align: center"> <br>
                                {{--<button type="submit" class="btn btn-fill">pesquisar</button>--}}
=======
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
         style="box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);">
        <div class="text-center d-flex justify-content-center">
            <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        <i class="pe-7s-home"></i>Pagina Inicial</a>
                </li>
                <li class="nav-item">
                    <a href="/pessoa_perdida/create/" class="nav-link">
                        <i class="pe-7s-add-user"></i>Pessoa Perdida</a>
                </li>
                <li>
                    <a>
                        <form method="POST" action="" role="search">
                            @csrf
                            <div class="col-md-auto">
                                <div class="form-group">
                                    <label>Pesquisar</label>
                                    <input type="text" id="entrada" name="pesquisar"
                                           class="form-control" value="{{ isset($pesquisar) ? $pesquisar : '' }}"
                                           placeholder="pesquise a pessoa Perdida" style="text-align: center"> <br>
                                    {{--<button type="submit" class="btn btn-fill">pesquisar</button>--}}

                                </div>
>>>>>>> 78130120b662c533628e883048f32cfb92c06d0c

                            </div>
                        </form>
                    </a>
                </li>
            </ul>


            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Olá, Edson Gomes</span>
                        <img class="img-xs rounded-circle" src="/images/foto.jpg" alt="Profile image">
                        <i class="pe-7s-edit"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="pe-7s-edit"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <i class="pe-7s-id"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="pe-7s-users"></i>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item mt-2">
                            Editar conta
                        </a>
                        <a class="dropdown-item">
                            Lista de Ajudas
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <br> <br> <br>





    <center>
        <center>
            <div class="row" style="position: relative; margin: 120px">
                @foreach($pessoa_perdida as $p_perdida)
                    <div class="col-sm-4">
                        <div class="card"
                             style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);">
                            <img class="card-img-top rounded-circle" src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}"
                                 style=" width: 180px; height: 180px; TOP: 10PX; position: relative;">
                            <div class="card-body" id="pesquisar">
                                <h2 class="">{{$p_perdida->nome}}</h2>
                                <h5 class="card-text">Idade: {{$p_perdida->age()}} </h5>
                            </div>
                            <p><a class="btn btn-info btn-fill" href="" data-toggle="modal"
                                  data-target="#exampleModalCenter{{$p_perdida->nome}}" role="button">Detalhes</a></p>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter{{$p_perdida->nome}}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="width: 100%;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Informação detalhada da pessoa
                                        perdida</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <img class="card-img-top" src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}"
                                             style=" width: 400px; height: 400px;">
                                    </div>
                                    <div class=""><CODE><h1>
                                                {{$p_perdida->nome}}
                                            </h1></CODE>
                                    </div>
                                    <div class=""><h4>
                                            <i class="pe-7s-id"></i>
                                            Segundo os dados fornecidos
                                            nasceu {{ $p_perdida->data_nasc }}
                                        </h4>
                                    </div>
                                    <div class=""><h4>
                                            Esta neste Centro ha: {{$p_perdida->dias()}}   dias.
                                        </h4>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    {{--<a href="/mapa" class="nav-link">--}}
                                        {{--<button type="button" class="btn btn-primary">Ver no Mapa</button>--}}
                                        <a href="/locations/{id_localizacao}" class="nav-link">
                                            <button type="button" class="btn btn-primary">Ver no Mapa</button>
                                    </a>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                    </form>
                </a>
            </li>
        </ul>

       
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          
        </ul>
      </div>
    </nav>
<br> <br> <br>
=======
                    </div>
                @endforeach
                <br>
                <div style=" margin-left: 500px">
                    {{$pessoa_perdida->links()}}
                </div>

            </div>
        </center>
>>>>>>> 78130120b662c533628e883048f32cfb92c06d0c

        <script>
            $(document).ready(function(){

                fetch_customer_data();

                function fetch_customer_data(pesquisar = '')
                {
                    $.ajax({
                        url:"{{URL::to('/search1')}}",
                        method:'GET',
                        data:{pesquisar:pesquisar},
                        dataType:'json',

                    })
                }

                $(document).on('keyup', '#entrada', function(){
                    alert('funciona??');
                    var pesquisar = $(this).val();
                    fetch_customer_data(pesquisar);
                });
            });
        </script>
        {{--<script type="text/javascript">--}}
            {{--$('#entrada').on('keyup',function(){--}}
                {{--alert('teste');--}}
                {{--$value=$(this).val();--}}

                {{--$.ajax({--}}

<<<<<<< HEAD
<center>
<center>
<div class="row" style="position: relative; margin: 120px" >
    @foreach($pessoa_perdida as $p_perdida)
    <div class="col-sm-4">
        <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);">
        <img class="card-img-top rounded-circle" src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}" style=" width: 180px; height: 180px; TOP: 10PX; position: relative;">
            <div class="card-body" id="pesquisar">
                <h2 class="">{{$p_perdida->nome}}</h2>
                <h5 class="card-text">Data de registo: {{$p_perdida->created_at}}</h5>
                <h5 class="card-text">Data de registo: {{$p_perdida->nome_localizacao}}</h5>
            </div>
            <p><a class="btn btn-info btn-fill" href="" data-toggle="modal" data-target="#exampleModalCenter{{$p_perdida->nome}}" role="button">Detalhes</a></p>
        </div>
    </div>

     <!-- Modal -->
    <div class="modal fade"id="exampleModalCenter{{$p_perdida->nome}}"tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="width: 100%; position: ">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Informação detalhada da pessoa perdida</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
              <img class="card-img-top"  src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}" style=" width: 400px; height: 400px;">
            </div>
            <div class=""><CODE><h1>
               {{$p_perdida->nome}}
            </h1></CODE>
            </div>
            <div class=""><h4>
                <i class="pe-7s-id"></i> 
             Segundo os dados fornecidos nasceu  {{
                $p_perdida->data_nasc
              }}
            </h4>
            </div>
            <div class=""><h4>
              Esta neste Centro ha:  dias.
            </h4>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <a href="/mapa" class="nav-link">
                  <button type="button" class="btn btn-primary">Ver no Mapa</button></a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
        <br>
        <div style=" margin-left: 500px">
            {{$pessoa_perdida->links()}}
        </div>
=======
>>>>>>> 78130120b662c533628e883048f32cfb92c06d0c


                    {{--type : 'get',--}}

                    {{--url : '{{URL::to('search1')}}',--}}

                    {{--data:{'search':$value},--}}

                    {{--success:function(data){--}}

                        {{--$('tbody').html(data);--}}

                    {{--}--}}

                {{--});--}}



            {{--})--}}
        {{--</script>--}}
    </center>
@endsection



@extends('layouts.app')
@section('title','Pagina Inicial')
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>" type="text/css" rel="stylesheet">
<script src="public/jquery-3.3.1.min.js"></script>

@section('content')

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

                            </div>

                        </div>
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

<div class="row" style="top: -8px;left: -0.5px;right: -6px; position: relative;">
<div class="col-lg-12" style="top: 0px">
                    <div class="card" style=" box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.5);">
                        <div class="body">
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        
                                        <img src="/images/14.jpg" style="width: 100%; height: 250px; filter:blur(1px)" />
                                        <div class="carousel-caption">
                                            <h3>Registar pessoa perdida</h3>
                                            <a href="/pessoa_perdida/create/" class="nav-link">
                                                <button type="button" class="btn btn-primary">Registar</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/images/13.jpg"  style="width: 100%; height: 250px;filter:blur(1px)" />
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <a href="/pessoa_perdida/create/" class="nav-link">
                                                <button type="button" class="btn btn-primary">Registar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
</div>
<center>
<center>
<div class="row">
    @foreach($pessoa_perdida as $p_perdida)
    <div class="col-sm-4">
        <div class="card" style="width: 18rem; height: 400px; border-radius: 15px; box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);">
        <img class="card-img-top rounded-circle" src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}" style=" width: 180px; height: 180px; TOP: 10PX; position: relative;">
            <div class="card-body" id="pesquisar">
                <h2 class="">{{$p_perdida->nome}}</h2>
                <h5 class="card-text">Idade: {{\Laravel_Learn\Pessoa_perdida::calcularIdade($p_perdida->data_nasc)}}</h5>
                <h5 class="card-text" style="color: gray">{{\Laravel_Learn\Pessoa_perdida::calcularDias($p_perdida->created_at)}}</h5>
            </div>
            <p><a class="btn btn-info btn-fill" href="" data-toggle="modal" data-target="#exampleModalCenter{{$p_perdida->id_p_perdida}}" role="button">Detalhes</a></p>
        </div>
    </div>

    <!-- Modal -->
        <div class="modal" id="exampleModalCenter{{$p_perdida->id_p_perdida}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"  >
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
                                 style=" width: 200px; height: 200px;">
                        </div>
                        <div class=""><CODE><h1>{{$p_perdida->nome}}</h1></CODE>
                        </div>
                        <div class=""><h4>
                                <i class="pe-7s-id"></i>
                                {{$p_perdida->data_nasc}}
                            </h4>
                        </div>
                    <h5 class=""><a href="">{{$p_perdida->designacao}}</a></h5>

                        <h4>
                                {{ \Laravel_Learn\Pessoa_perdida::calcularDias($p_perdida->created_at) }}
                            </h4>
                        

                    </div>
                    <div class="modal-footer">
                        <a href="/contribuir/{{$p_perdida->id_p_perdida}}/edit" class="nav-link">
                            <button type="button" class="btn btn-primary">Comentar</button>
                        </a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <a href="/locations/{{$p_perdida->id_localizacao}}" class="nav-link">
                            <button type="button" class="btn btn-primary">Ver no Mapa</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
        <br>
        <div style=" margin-left: 500px">
        </div>

</div>
</center>

<script src="<?php echo asset('js/jquery-2.1.4.min.js')?>"></script>
    <script>
        $(document).ready(function(){

            fetch_customer_data();

            function fetch_customer_data(query = '')
            {
//                alert('olla');
                $.ajax({
                    url:"{{ route('live_search.action') }}",
                    method:'GET',

                    data:{query:query},
                    dataType:'json',
                    success:function(data)
                    {
                        $('tbody').html(data.table_data);
                        $('#total_records').text(data.total_data);
                    }
                })
            }

            $(document).on('keyup', '#entrada', function(){
                var query = $(this).val();
                fetch_customer_data(query);
            });
        });
    </script>

</center>
@endsection


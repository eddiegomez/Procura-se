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



    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center d-flex justify-content-center">
        <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
    </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="/pessoa_perdida/" class="nav-link">
            <i class="pe-7s-home"></i>Pagina Inicial</a>
          </li>
          <li class="nav-item active">
            <a href="/pessoa_perdida/create/" class="nav-link">
            <i class="pe-7s-add-user"></i>Pessoa Perdida</a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Edson Gomes</span>
              <img class="img-xs rounded-circle" src="/imgs_p_perdidas/1538714846foto.jpg" alt="Profile image">
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


<div class="content" style="left: 5px; position: relative;top: 120PX" style="background-image: url("/images/register.jpg");">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="header">
                                <h4 class="title">Painel de Contribuicoes</h4>
                            </div>

                            <div class="content">
                                <div class="row">
                                <div class="col-sm-4" style="float: right;">
                                    <center>
                                        <label>Caso</label>
                                    <div class="card" style="width: 25rem; border-radius: 2px; box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0);">
                                    <img class="card-img-top rounded-circle" src="/imgs_p_perdidas/{{$pessoa_perdida->nome_foto}}" style=" width: 180px; height: 180px; TOP: 10PX; position: relative;">
                                        <div class="card-body" id="pesquisar">
                                            <h2 class="">{{$pessoa_perdida->nome}}</h2>
                                            <h5 class="card-text">{{\Laravel_Learn\Pessoa_perdida::calcularIdade($pessoa_perdida->data_nasc)}} anos de idade</h5>
                                            <h5 class="card-text" style="color: gray"></h5>
                                        </div>
                                       
                                    </div>
                                    </center>
                                <div class="clearfix"></div>
                            </div>
                                <div class="col-sm-8">
                                    <label>Contributo</label>
                                    <form method="POST" action="/pessoa_perdida" enctype="multipart/form-data">
                                            @csrf 
                                            <div class="col-md-12" style="top: -25px">
                                                <div class="form-group">
                                                    
                                                    <textarea rows="5" name="obs" class="form-control" placeholder="adicione aqui qualquer informação que possa ajudar a localizar"></textarea>
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-info btn-fill pull-right" style="top:10px; bottom: 10px; position: relative; ">Comentar</button>
                                                
                                            </div>
                                            <div class="col-md-12">
                                                @foreach($contributos as $contributo)
                                                    <div class="well form-group">
                                                        <h4>{{$contributo->content}}</h4>
                                                        <small style="color: gray">{{$contributo->created_at}}</small>
                                                    </div>
                                                @endforeach
                                            </div>

                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       


@endsection

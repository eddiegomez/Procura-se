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

<nav class="navbar navbar-default navbar-fixed" style="background-color: azure">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="content" style="left: 150px; position: relative;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Registo de Pessoa Perdida</h4>
                            </div>
                            <div class="content">
                                <form action="/pessoa_perdida" method="POST" class="form-group" enctype="multipart/form-data" >
                                     @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control" placeholder="Nome" name="nome">
                                            </div>
                                        </div>
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label>Nome</label>--}}
                                                {{--<input type="text" class="form-control" placeholder="outros nomes">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Sexo</label>
                                                <select class="form-control">
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Feminino</option>
                                                </select> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Data de Nascimento</label>
                                                <input type="date" class="form-control" placeholder="DD/MM/AAAA" name="d_nasc">
                                            </div>
                                        </div>
                                    </div>

                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nacionalidade</label>
                                                <input type="text" class="form-control" placeholder="Nacionalidade"  name="nacionalidade">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Morada</label>
                                                <input type="text" class="form-control" placeholder="Morada"  name="morada">
                                            </div>
                                        </div>
                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" class="form-control" name="filename">
                                            </div>
                                        </div>
                                    </div>

                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-4">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label>City</label>--}}
                                                {{--<input type="text" class="form-control" placeholder="City" value="Mike">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label>Country</label>--}}
                                                {{--<input type="text" class="form-control" placeholder="Country" value="Andrew">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label>Postal Code</label>--}}
                                                {{--<input type="number" class="form-control" placeholder="Edson Gomes">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label>About Me</label>--}}
                                                {{--<textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <br>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Gravar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

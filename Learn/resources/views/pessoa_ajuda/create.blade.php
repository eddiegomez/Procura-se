@extends('layouts.app')
@section('title','Registo de pessoa de Ajuda')
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
            <i class="pe-7s-add-user"></i>Registrar-me</a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">
          
          
        </ul>
      </div>
    </nav>

<div class="content" style="left: 180px; position: relative;top: 120PX">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Registo</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="/pessoa_ajuda" enctype="multipart/form-data">
                                        @csrf 
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control" name="nome" placeholder="nome completo ">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sexo</label>
                                                <select class="form-control" name="sexo" style="height: 35px">
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Feminino</option>
                                                </select> 
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Data de Nascimento</label>
                                                <input type="date" name="d_nasc" class="form-control" placeholder="DD/MM/AAAA">
                                            </div>
                                        </div>
                                    

                                
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="exemplo@email.com">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="number" name="telefone" class="form-control" placeholder="+258">
                                            </div>
                                        </div>
                                    
                                       <div class="col-md-4">
                                            <div class="form-group">
                                                <label>País</label>
                                                <input type="text" name="pais" class="form-control" placeholder="pais de residencia">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Provincia</label>
                                                <input type="text" name="Provincia" class="form-control" placeholder="provincia">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bairro</label>
                                                <input type="text" name="telefone" class="form-control" placeholder="bairro">
                                            </div>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Avenida</label>
                                                <input type="text" name="avenida" class="form-control" placeholder="avenida ou rua">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Casa</label>
                                                <input type="number" name="casa" class="form-control" placeholder="N* da casa">
                                            </div>
                                        </div>

                                   
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <label>Nome de usuario</label>
                                                <input type="usuario" name="usuario" class="form-control" placeholder="User1">

                                            </div>
                                        </div>
                                   

                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Usuario</label>
                                                <input type="usuario" name="usuario" class="form-control">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" name="senha" class="form-control">
                                            </div>
                                        </div>
                                             

                                  
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection

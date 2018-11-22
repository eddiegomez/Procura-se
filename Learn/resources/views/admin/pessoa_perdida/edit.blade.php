@extends('layouts.app')
@section('title','Procura-se (Administrativo)')

@section('content')

<div class="wrapper">

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
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
    <div class="main-panel">
   @include('inc.navbar2')
    
    <nav aria-label="breadcrumb" style="top: -60px"> 
        <ol class="breadcrumb"> 
            <li class="breadcrumb-item"><a href="/front-admin">Admin</a></li> 
            <li class="breadcrumb-item"><a href="/user">Pessoas perdidas</a></li> 
            <li class="breadcrumb-item active" aria-current="page">Editar</li> 
        </ol> 
    </nav>

    <div class="content col-md-12" style="position: relative;margin-left: 40px ; top: -30px">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-11">
                    <div class="card" style="box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);">
                        <div class="header">
                            <h4 class="title">Pessoa Perdida</h4>
                        </div>
                        <div class="content">
                            <form method="POST" action="/pessoa_perdida/{{$pessoa_perdida->id_p_perdida}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf 
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" value="{{$pessoa_perdida->nome}}" class="form-control" name="nome" placeholder="nome completo">
                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>Sexo</label>
                                                <select class="form-control" name="sexo" value="{{$pessoa_perdida->sexo}}"style="height: 34px">
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Feminino</option>
                                                </select> 
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Data de Nascimento</label>

                                                <input type="date" class="form-control" value="{{$pessoa_perdida->data_nasc}}" placeholder="DD/MM/AAAA" name="d_nasc">

                                            </div>
                                        </div>
                                    

                                
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nacionalidade</label>

                                                <input type="text" class="form-control" value="{{$pessoa_perdida->nacionalidade}}" placeholder="Nacionalidade"  name="nacionalidade">

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>naturalidade</label>

                                                <input type="text" class="form-control" value="{{$pessoa_perdida->naturalidade}}" placeholder="naturalidade"  name="naturalidade">

                                            </div>
                                        </div>

                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" name="foto" class="form-control" value="{{$pessoa_perdida->foto}}" style="height: 43px">
                                            </div>
                                        </div>  
                                    

                                       
            

                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Informação adicional</label>
                                                <textarea rows="7" name="obs" value="{{$pessoa_perdida->obs}}" class="form-control" placeholder="informação adicional sobre a pessoa perdida"></textarea>
                                            </div>
                                        </div> 
                                        <a class="btn btn-info">Cancelar</a>
                                        <a class="btn btn-danger">Remover</a>
                                        <button type="submit" class="btn btn-success btn-fill pull-right">Actualizar</button>
                                    
                                    <div class="clearfix"></div>
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

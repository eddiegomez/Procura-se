@extends('layouts.app')
@section('title','Procura-se (Administrativo)')
@section('content')

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="/pessoa_perdida/" class="simple-text">
                    PROCURA-SE
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/user">
                        <i class="pe-7s-add-user"></i>
                        <p>Pessoas Perdidas</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/centro">
                        <i class="pe-7s-note2"></i>
                        <p>Registar Centros</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Estatístias</p>
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

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center d-flex justify-content-center">
        <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
    </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item active">
            <a href="/pessoa_perdida/" class="nav-link">
            <i class="pe-7s-home"></i>Pagina Inicial</a>
          </li>
          <li class="nav-item">
            <a href="/pessoa_perdida/create/" class="nav-link">
            <i class="pe-7s-add-user"></i>Pessoa Perdida</a>
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


<div class="content" style="left: 280px; position: relative;top: 120PX">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Dados do Responsavel pelo Centro</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="/responsavel" enctype="multipart/form-data">
                                        @csrf 
                                        <div class="form-group">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control" name="nome" placeholder="designação do centro">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Data de nascimento</label>
                                                <input type="Date" class="form-control" name="data_nasc" placeholder="DD-MM-AAAA">
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sexo</label>
                                                <select class="form-control" name="sexo" style="height: 34.5px">
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Feminino</option>
                                                </select> 
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tipo de documento</label>
                                                <select class="form-control" name="tipo_doc" style="height: 34.5px">
                                                    <option value="BI">Bilhete de identidade</option>
                                                    <option value="DIRE">DIRE</option>
                                                    <option value="Carta de condução">Carta de condução</option>
                                                    <option value="Cartão de eleitorr">Cartão de eleitor</option>
                                                    <option value="Outros">Outros</option>
                                                </select> 
                                            </div>
                                        </div>
                                    
                                       <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Numero</label>
                                                <input type="text" name="numero_doc" class="form-control" placeholder="numero do documento" required="">
                                            </div>
                                        </div>


                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="responsavel@exemplo.com">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input type="number" name="contacto" class="form-control" placeholder="+258">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Centro de Acolhimento</label>
                                                <select class="form-control" name="centro" style="height: 34.5px">
                                                    <option value="M"></option>
                                                    <option value="F"></option>
                                                </select> 
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Avenida</label>
                                                <input type="text" name="avenida" class="form-control" placeholder="avenida/rua">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Bairro</label>
                                                <input type="text" name="bairro" class="form-control" placeholder="residencia">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quarteirão</label>
                                                <input type="number" name="quarteirao" class="form-control" placeholder="n° do quarteirão"> 
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Numero</label>
                                                <input type="number" name="nr" class="form-control" placeholder="n° do domicilio">
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
                                                <label>Senha</label>
                                                <input type="password" name="senha" placeholder="defina uma senha" class="form-control">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" name="senhac" placeholder="confirme senha introduzida" class="form-control">
                                            </div>
                                        </div>

                                    </br>
                                </div>
                                  
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Gravar</button>
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

<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

@endsection

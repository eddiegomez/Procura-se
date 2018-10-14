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
            <a href="#" class="nav-link">
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
                                <h4 class="title">Dados do Centro</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="/centro" enctype="multipart/form-data">
                                        @csrf 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control" name="designacao" placeholder="designação do centro">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tipo</label>
                                                <select class="form-control" name="tipo" style="height: 34px">
                                                    <option value="">Selecione</option>
                                                    <option value="Posto Policial">Posto Policial</option>
                                                    <option value="Centro de Abrigo">Centro de Abrigo</option>
                                                    <option value="Outros">Outros</option>
                                                </select> 
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Capacidade</label>
                                                <input type="number" name="capacidade" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    
                                       <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input type="number" name="celular" class="form-control" placeholder="+258" required="">
                                            </div>
                                        </div>


                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Email Institucional</label>
                                                <input type="text" name="email" class="form-control" placeholder="centro@exemplo.com">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Provincia</label>
                                                <select class="form-control" name="provincia" style="height: 35px">
                                                    <option value="Maputo">Maputo</option>
                                                    <option value="Gaza">Gaza</option>
                                                    <option value="Inhambane">Inhambane</option>
                                                    <option value="Beira">Beira</option>
                                                    <option value="Tete">Tete</option>
                                                    <option value="Zambezia">Zambezia</option>
                                                    <option value="Nampula">Nampula</option>
                                                    <option value="Niassa">Niassa</option>
                                                    <option value="Cabo Delgado">Cabo-Delgado</option>
                                                </select> 
                                            </div>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Avenida</label>
                                                <input type="text" name="avenida" class="form-control" placeholder="avenida/rua">
                                            </div>
                                        </div>

                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Numero</label>
                                                <input type="number" name="nr" class="form-control" placeholder="numero">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label><i class="pe-7s-map-marker" style="color: green;"></i>Marcar no Mapa</label>
                                            <div class="form-control">
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Informação adicional</label>
                                                <textarea rows="7" name="obs" class="form-control" placeholder="informação adicional sobre a pessoa perdida"></textarea>
                                            </div>
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

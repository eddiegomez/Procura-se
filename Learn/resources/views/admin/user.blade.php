@extends('layouts.app') 
<link rel="stylesheet" href="<?php echo asset('css/template/bootstrap.min')?>">
<link rel="stylesheet" href="<?php echo asset('css/template/light-bootstrap-dashboard.min')?>"
@section('title','Procura-se (Administrativo)')


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
                    <a href="">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-map-marker"></i>
                        <p>Pessoas perdidas</p>
                    </a>
                </li>
                <li>
                    <a href="/centro">
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
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Icons</a>
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


    <div class="col-md-4" style="right: 30px">
      <a href="/create">
      <button type="submit" class="btn btn-info btn-fill pull-right">Registar</button>
    </a>
    </div>

	<div class="content col-md-9" style="position: relative; top: 20px;float: right;right: 40px">
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
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($pessoa_perdida as $p_perdida)
                      <tr>
                        <td>{{$p_perdida->id_p_perdida}}</td>
                        <td class="py-1"><img src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}" alt="image" /></td>
                        <td>{{$p_perdida->nome}}</td>
                        <td>{{$p_perdida->sexo}}</td>
                        <td>por definir</td>
                        <td>{{$p_perdida->created_at}}</td>
                        <td>{{$p_perdida->nome_localizacao}}</td>
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


        <main class="row">
            @yield('content')
        </main>

</div>
</div>

<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


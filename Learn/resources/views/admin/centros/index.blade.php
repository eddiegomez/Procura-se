@extends('layouts.app')
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
    


    <div class="col-md-4" style="right: 30px">
      <a href="/create_centro">
      <button type="submit" class="btn btn-info btn-fill pull-right">Registar</button>
    </a>
    </div>
    @include('inc.messages')
                <div class="content col-md-9" style="position: relative;top: 40px; float: right;; right: 40px">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Centros de Acolhimento</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Designação</th>
                        <th>Tipo</th>
                        <th>Capacidade</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Provincia</th>
                        <th>Avenida</th>
                        <th>numero</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($centro_acolhimento as $centro)
                      <tr>
                        <td>{{$centro->id_centro}}</td>
                        <td>{{$centro->designacao}}</td>
                        <td>{{$centro->tipo}}</td>
                        <td>{{$centro->capacidade}}</td>
                        <td>{{$centro->celular}}</td>
                        <td>{{$centro->email}}</td>
                        <td>{{$centro->provincia}}</td>
                        <td>{{$centro->avenida}}</td>
                        <td>{{$centro->numero}}</td>
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

<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>



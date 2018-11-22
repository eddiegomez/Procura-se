@extends('layouts.app')
@section('title','Procura-se (Administrativo)')

<div class="wrapper" style="background-color: #F8F8FF">
    <div class="sidebar" data-color="azure" data-image="/images/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                   PROCURA-SE
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/front-admin">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="">
                    <a href="/user">
                        <i class="pe-7s-menu"></i>
                        <p>Pessoas perdidas</p>
                    </a>
                </li>
                <li class="">
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
    
@include('inc.navbar2')
<div class="col-sm-9" style="float: right;margin: 30px">
 <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics"  style="background-color: azure">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h1 style="color: gray">
                      <i class="pe-7s-map-marker"></i>
                      </h1>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Centros</p>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0" style="color: gray">{{$centro}}</h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    Centros de Acolhimento
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics"  style="background-color: azure;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h1 style="color: gray">
                      <i class="pe-7s-pin"></i>
                      </h1>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Pessoas perdidas</p>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0" style="color: gray">{{$pessoa_p}}</h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    Casos em aberto
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics" style="background-color: azure;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h1 style="color: gray">
                      <i class="pe-7s-flag"></i>
                      </h1>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Casos de sucesso</p>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0" style="color: gray">{{$sucesso}}</h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    Casos encerrados
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics"  style="background-color: azure;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h1 style="color: gray">
                      <i class="pe-7s-users"></i>
                      </h1>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Usuarios</p>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0" style="color: gray">{{$users}}</h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    Usuários do sistema
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>
</div>





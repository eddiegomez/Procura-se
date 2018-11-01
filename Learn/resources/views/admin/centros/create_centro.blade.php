@extends('layouts.app')
@section('title','Procura-se (Administrativo)')
<style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>


    {{--<script src="public/jquery-3.3.1.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <div class="main-panel">
   @include('inc.navbar2')

   <nav aria-label="breadcrumb" style="right: -55px; position: relative;"> 
        <ol class="breadcrumb"> 
            <li class="breadcrumb-item"><a href="/front-admin">Admin</a></li>
            <li class="breadcrumb-item"><a href="/centro">Centros</a></li> 
            <li class="breadcrumb-item current" aria-current="page">Registar</li> 
        </ol> 
    </nav>
    
   <div style="width: : 100%; height: 100px;">
       @include('inc.messages')
   </div>


    <div class="content col-md-12" style="position: relative;margin-left: 40px; top: -30px">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-11">
                    <div class="card" style="box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);">
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


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Logotipo</label>
                                                <input type="file" name="foto" class="form-control" placeholder="" style="height: 43px">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label><i class="pe-7s-map-marker" style="color: green;"></i>Marcar no Mapa</label>
                                            <div class="map">
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Informação adicional</label>
                                                <textarea rows="7" name="obs" class="form-control" placeholder="informação adicional sobre o centro"></textarea>
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

<script>
    var customLabel = {
        restaurant: {
            label: 'R'
        },
        bar: {
            label: 'B'
        }
    };

    function initMap() {
        var map,
            currentLocation,
            destinations = [],
            infoWindow = new google.maps.InfoWindow,
            iconesPontos = [];
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                currentLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                map = new google.maps.Map(document.getElementById('map'), {
                    center: currentLocation,
                    zoom: 13.5
                });
                loadLocations();
                var marker = new google.maps.Marker({
                    map: map,
                    position: currentLocation,
                });
                infoWindow.setContent('<span>esta é a sua localização actual</span>');
                infoWindow.open(map, marker);

            });
        } else {
            map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(-25.923794, 32.574922),
                zoom: 20
            });

        }

        function loadLocations() {
            $.ajax({
                url: '/locations',
                success: function (data ) {
                    data.forEach(function (localDaBaseDeDados)
                    {
                        var point = new google.maps.LatLng(
                            parseFloat(localDaBaseDeDados.lat),
                            parseFloat(localDaBaseDeDados.lng));
                        destinations.push(point);

                        var icon = customLabel[localDaBaseDeDados.type] || {};
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            label: icon.label
                        });
                        calcularDistancia(point, function (resposta, estado) {
                            console.log(resposta);
                            var distancia = resposta.rows[0].elements[0].distance.text;
                            var tempo = resposta.rows[0].elements[0].duration.text;
                            var nome = localDaBaseDeDados.nome;
                            var template =`
                            <div>
                                <strong> ${nome} </strong>
                                <br>
                                <text>distancia: ${distancia} - ${tempo}</text>
                            </div>
                          `;

                            marker.addListener('click', function () {
                                infoWindow.setContent(template);
                                infoWindow.open(map, marker);
                            });
                        })
                    });
                },
                error: function (err) {
                    console.log('houve um erro', err)
                }
            });
        }

        function calcularDistancia(destino, callback) {
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [currentLocation],
                    destinations: [destino],
                    travelMode: 'DRIVING',
                    unitSystem: google.maps.UnitSystem.METRIC,
                    avoidHighways: true,
                    avoidTolls: true,
                }, function (resposta, estado) {
                    callback(resposta, estado);
                })
        }
    }
</script>
<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbv-KabC3eIe31J_d_q9O0WwXU5O9Kfjg-->
<!--&callback=initMap">-->
<!--</script>-->
<script async defer src=" https://maps.googleapis.com/maps/api/js?key=AIzaSyCbv-KabC3eIe31J_d_q9O0WwXU5O9Kfjg
&callback=initMap"  type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>

@endsection

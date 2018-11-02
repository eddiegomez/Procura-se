<!DOCTYPE html >
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Using MySQL and PHP with Google Maps</title>
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


</head>

<body>
<div id="map"></div>

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
                infoWindow.setContent('<span>Esta é a sua localização actual</span>');
                infoWindow.open(map, marker);

            });
        }
        function loadLocations() {
            $.ajax({
                url: '/api/locations/{{$location->id_localizacao}}',
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
</body>
</html>
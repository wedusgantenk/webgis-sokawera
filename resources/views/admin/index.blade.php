@extends('layouts.theme.backend.master')
@section('title')
    Welcome To Dashboard
@endsection

@section('content')
    <div class="row">
        <!-- Expense Overview -->
        <div class="col-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-3">
                        <h5 class="m-0 me-2">Data Tanah</h5>
                        <small class="text-muted">Desa xxx</small>
                    </div>
                </div>
                <div class="card-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
    <style>
        #map {
            width: 100%;
            height: 530px;
            border-radius: 15px
        }
    </style>
@endsection

@section('scripts')
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <script type="text/javascript">
        const statesData = @json($tanahJson);
    </script>
    <script type="text/javascript">
        L.mapbox.accessToken =
            'pk.eyJ1Ijoib2phbmFscGhhIiwiYSI6ImNreHR0ZGp1MzVuZGcyemt5MHg3Z2t4eHQifQ.peGpGa_e1Bs4amUI5AsDWQ';
        const map = L.map('map').setView([-7.43938, 109.24628], 15);

        const tiles = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/{z}/{x}/{y}?access_token=' + L
            .mapbox.accessToken, {
                maxZoom: 19,
                attribution: '© <a href="https://www.mapbox.com/feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);

        map.createPane('labels');

        /* global data */
        const geojson = L.geoJson(statesData).addTo(map);

        geojson.eachLayer((layer) => {
            // layer.bindPopup(layer.feature.properties.name);
            var body =
                `<table class="table table-striped"> <tbody> <tr> <th>Nomor</th> <td>:</td> <td>` + layer.feature
                .properties.nomor +
                `</td> </tr> <tr> <th>Nama Pemilik</th> <td>:</td> <td>` + layer.feature.properties.nama_terbaru +
                `</td> </tr> <tr> <th>Luas Tanah</th> <td>:</td> <td>` + layer.feature.properties.luas_tanah +
                ` m<sup>2</sup></td> </tr> <tr> <th>Luas Bangunan</th> <td>:</td> <td>` + layer.feature.properties
                .luas_bangunan + ` m<sup>2</sup></td> </tr> </tbody> </table>`
            layer.bindPopup(body);
        });
    </script>
@endsection

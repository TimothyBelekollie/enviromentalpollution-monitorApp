@extends('master')
@section('dashboard')
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row align-items-end">
            <div class="col-xl-12 col-12">
                <div class="box bg-primary pull-up">
                    <div class="box-body p-xl-0">							
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-3"><img src="{{asset('images/svg-icon/color-svg/custom-14.svg')}}" alt=""></div>
                            <div class="col-12 col-lg-9">
                                <h2>Hello {{Auth::user()->name}}, Welcome Back!</h2>
                                <p class="text-white-50 mb-0 fs-16">
                                    Please Feel Free to go through the Air statistics of your environment
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12">														
                <div class="box no-shadow mb-0 bg-transparent">
                    <div class="box-header no-border px-0">
                        <h4 class="box-title">Your Air Statistics</h4>	
                        <ul class="box-controls pull-right d-md-flex d-none">
                         
                         
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-md-6 col-12">
                <div class="box bg-dark pull-up" style="background-image: url(../images/svg-icon/color-svg/st-1.svg); background-position: right bottom; background-repeat: no-repeat;">
                    <div class="box-body">	
                        <div class="flex-grow-1">	
                            <div class="d-flex align-items-center pe-2 justify-content-between">
                                <div class="d-flex">									
                                    <span class="badge badge-primary me-15">Active</span>
                                    <span class="badge badge-primary me-5"><i class="fa fa-lock"></i></span>
                                    <span class="badge badge-primary"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <div class="dropdown">
                                    <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                    </div>
                                </div>						
                            </div>
                            <h4 class="mt-25 mb-5">It & software</h4>
                            <p class="text-fade mb-0 fs-12">45 Days Left</p>
                        </div>	
                    </div>					
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box bg-dark pull-up" style="background-image: url(../images/svg-icon/color-svg/st-2.svg); background-position: right bottom; background-repeat: no-repeat;">
                    <div class="box-body">	
                        <div class="flex-grow-1">	
                            <div class="d-flex align-items-center pe-2 justify-content-between">
                                <div class="d-flex">									
                                    <span class="badge badge-dark me-15">Finished</span>
                                </div>
                                <div class="dropdown">
                                    <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                    </div>
                                </div>						
                            </div>
                            <h4 class="mt-25 mb-5">Programming</h4>
                            <p class="text-fade mb-0 fs-12">1 Days Left</p>
                        </div>	
                    </div>					
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box bg-dark pull-up" style="background-image: url(../images/svg-icon/color-svg/st-3.svg); background-position: right bottom; background-repeat: no-repeat;">
                    <div class="box-body">	
                        <div class="flex-grow-1">	
                            <div class="d-flex align-items-center pe-2 justify-content-between">
                                <div class="d-flex">									
                                    <span class="badge badge-primary me-15">Active</span>
                                    <span class="badge badge-primary me-5"><i class="fa fa-lock"></i></span>
                                </div>
                                <div class="dropdown">
                                    <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                    </div>
                                </div>						
                            </div>
                            <h4 class="mt-25 mb-5">Networking</h4>
                            <p class="text-fade mb-0 fs-12">15 days Left</p>
                        </div>	
                    </div>					
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box bg-dark pull-up" style="background-image: url(../images/svg-icon/color-svg/st-4.svg); background-position: right bottom; background-repeat: no-repeat;">
                    <div class="box-body">	
                        <div class="flex-grow-1">	
                            <div class="d-flex align-items-center pe-2 justify-content-between">
                                <div class="d-flex">									
                                    <span class="badge badge-warning-light me-15">Paused</span>
                                    <span class="badge badge-warning-light me-5"><i class="fa fa-lock"></i></span>
                                </div>
                                <div class="dropdown">
                                    <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                    </div>
                                </div>						
                            </div>
                            <h4 class="mt-25 mb-5">Network Security</h4>
                            <p class="text-fade mb-0 fs-12">21 Days Left</p>
                        </div>	
                    </div>					
                </div>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-body">
                        <p class="text-fade">Temperature Guage</p>
                        <h3 class="mt-0 mb-20"><small class="text-success"><i class="fa fa-arrow-up ms-15 me-5"></i> </small></h3>
                        <div id="temperature_chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-body">
                        <p class="text-fade">Humidity Guage</p>
                        <h3 class="mt-0 mb-20"><small class="text-success"><i class="fa fa-arrow-up ms-15 me-5"></i> </small></h3>
                        <div id="humidity_chart"></div>
                    </div>
                </div>
            </div>
           
            
        </div>

        <div class="row">
            <div class="col-xl-12 col-12">
                <div class="box">
                    <div class="box-body">
                        <p class="text-fade">Air Quality Index</p>
                        <h3 class="mt-0 mb-20"><small class="text-success"><i class="fa fa-arrow-up ms-15 me-5"></i> </small></h3>
                        <div id="aqi_chart_div" style="width: 100%; height: 300px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-12">
                <div class="box">
                    <div class="box-body">
                        <p class="text-fade">Alcohol Concentration</p>
                        <h3 class="mt-0 mb-20"><small class="text-success"><i class="fa fa-arrow-up ms-15 me-5"></i> </small></h3>
                        <div id="alcohol_chart_div" style="width: 100%; height: 300px;"></div>
                    </div>
                </div>
            </div>
           
            
        </div>
       

        <div class="row">
            
            <div class="col-xl-12 col-12">
                <div class="box">
                    <div class="box-body">
                        <h3 class="text-fade">Live Location on Map</h3>
                        <h3 class="mt-0 mb-20"><small class="text-success"><i class="fa fa-arrow-up ms-15 me-5"></i> </small></h3>
                        <div id="map" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
           
            
        </div>
       
    </section>
    <!-- /.content -->
  </div>



 

  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




  <script>
    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
        var temperatureData = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Temperature', 0]
        ]);
        var temperatureChart = new google.visualization.Gauge(document.getElementById('temperature_chart'));
        temperatureChart.draw(temperatureData, options);

        var humidityData = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Humidity', 0]
        ]);
        var humidityChart = new google.visualization.Gauge(document.getElementById('humidity_chart'));
        humidityChart.draw(humidityData, options);

        // Fetch real-time sensor data periodically
        setInterval(fetchSensorData, 5000);

        function fetchSensorData() {
            $.get('/fetch-sensor-data', function(response) {
                temperatureData.setValue(0, 1, response.temperature);
                temperatureChart.draw(temperatureData, options);

                humidityData.setValue(0, 1, response.humidity);
                humidityChart.draw(humidityData, options);
            });
        }
    }

    var options = {
        width: 600,
        height: 300,
        redFrom: 90,
        redTo: 100,
        yellowFrom:75,
        yellowTo: 90,
        minorTicks: 5
    };
</script>



<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(fetchAQIData);

    function fetchAQIData() {
        // Fetch AQI data from the server
        updateAQIData();
        // Set interval to fetch new data every 3 seconds
        setInterval(updateAQIData, 3000);
    }

    function updateAQIData() {
        $.get('/sensor-data/aqi', function(data) {
            var aqiData = new google.visualization.DataTable();
            aqiData.addColumn('datetime', 'Time');
            aqiData.addColumn('number', 'Air Quality Index');

            // Parse data from the response and add it to the DataTable
            data.forEach(function(item) {
                aqiData.addRow([new Date(item.created_at), item.air_quality_index]);
            });

            drawAQIChart(aqiData);
        });
    }

    

    function drawAQIChart(data) {
        var options = {
            title: 'Air Quality Index (AQI)',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('aqi_chart_div'));
        chart.draw(data, options);
    }
</script>




<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(fetchAlcoholData);

    function fetchAlcoholData() {
        // Fetch alcohol concentration data from the server
        updateAlcoholData();
        // Set interval to fetch new data every 3 seconds
        setInterval(updateAlcoholData, 3000);
    }

    function updateAlcoholData() {
        $.get('/sensor-data/alcohol-concentration', function(data) {
            var alcoholData = new google.visualization.DataTable();
            alcoholData.addColumn('datetime', 'Time');
            alcoholData.addColumn('number', 'Alcohol Concentration');

            // Parse data from the response and add it to the DataTable
            data.forEach(function(item) {
                alcoholData.addRow([new Date(item.created_at), item.alcohol_concentration]);
            });

            drawAlcoholChart(alcoholData);
        });
    }

    function drawAlcoholChart(data) {
        var options = {
            title: 'Alcohol Concentration',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('alcohol_chart_div'));
        chart.draw(data, options);
    }
</script>



















{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpMXM3DObwDmDOyX5XFKarCB9Kdo5L4KI&callback=initMap" async defer></script> --}}
{{-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyCW5ZX-NhiKDVuh_AYHJgvHzkdibNUK7CM&callback=initMap&libraries=drawing"></script> --}}


{{-- <script type="text/javascript">

    function initMap() {
        // Default coordinates (if no sensor data is available)
        var defaultLatLng = { lat: 0, lng: 0 };
        // Replace default coordinates with actual sensor data (latitude and longitude)
        var sensorLatLng = { lat: YOUR_LATITUDE, lng: YOUR_LONGITUDE };

        // Create a new map instance
        var map = new google.maps.Map(document.getElementById('map'), {
            center: sensorLatLng, // Set center to sensor location
            zoom: 10 // Adjust zoom level as needed
        });

        // Create a marker for the sensor location
        var marker = new google.maps.Marker({
            position: sensorLatLng,
            map: map,
            title: 'Sensor Location' // Tooltip for the marker
        });
    }
</script> --}}

<script>
    // Function to fetch latest GPS data from the server
    function fetchLatestGPSData() {
        $.get('/latest-gps-data', function(data) {
            // Check if data is available
            if (data) {
                // Extract latitude and longitude from the response
                var latitude = parseFloat(data.latitude);
                var longitude = parseFloat(data.longitude);

                // Update the map with the new coordinates
                updateMap(latitude, longitude);
            }
        });
    }

    // Function to initialize the map
    function initMap() {
        var defaultLatLng = { lat: -1.9403, lng: 29.8739 };
        var map = new google.maps.Map(document.getElementById('map'), {
            center: defaultLatLng,
            zoom: 8
        });
        var marker = new google.maps.Marker({
            position: defaultLatLng,
            map: map,
            title: 'Sensor Location'
        });

        // Fetch latest GPS data every 3 seconds
        setInterval(fetchLatestGPSData, 3000);
    }

    // Function to update the map with new coordinates
    function updateMap(latitude, longitude) {
        var newLatLng = { lat: latitude, lng: longitude };
        map.panTo(newLatLng); // Pan the map to the new coordinates
        marker.setPosition(newLatLng); // Move the marker to the new coordinates
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpMXM3DObwDmDOyX5XFKarCB9Kdo5L4KI&loading=async&callback=initMap" ></script>
  @endsection

@extends('dashboard.user.home', ['title' => __('User Profile')])
@section('content')
<style>
    .bg-gradient-primary {
      background: linear-gradient(87deg, #f5f6fc 0, #f5f6fc 100%) !important;

}

</style>



<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" >

    <div class="container-fluid">

<div style="float: right;" class="btn-group btn-group1 mr-4 filter_searchs">
          <button type="button" class="btn db_month dropdown-toggle fliter-wraps" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span id="show">Monthly</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown1" >
            <button id="default-option" class="dropdown-item" type="button">Monthly</button>
            <button class="dropdown-item" type="button">Daily</button>
            <button class="dropdown-item" type="button">Weekly</button>
            <button class="dropdown-item" type="button">Yearly</button>
          </div>
        </div>

    <h1 class="Polaris-Header-Title dgc-title">Dashboard</h1>

   
        <div class="header-body">
       
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body" style="background:transparent linear-gradient(160deg, #3500FA 0%, #36059E 100%) 0% 0% no-repeat padding-box !important;color:white;border-radius: 16px;">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase  mb-0" style="color:white;">Total Installer</h5>
                                    <span class="h2 font-weight-bold mb-0" style="color:white;">350,897</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 ">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body" style="background:transparent linear-gradient(119deg, #09BB96 0%, #09B894 0%, #09BB96 100%) 0% 0% no-repeat padding-box;color:white;border-radius: 16px;">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase  mb-0" style="color:white;">Uninstaller</h5>
                                    <span class="h2 font-weight-bold mb-0" style="color:white;">2,356</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                                <span class="text-nowrap">Since last week</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body" style="background:transparent linear-gradient(160deg, #3500FA 0%, #36059E 100%) 0% 0% no-repeat padding-box !important;;color:white;border-radius: 16px;">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase  mb-0" style="color:white;">Total Amount</h5>
                                    <span class="h2 font-weight-bold mb-0" style="color:white;">924</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0  text-sm" style="color:white;">
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                <span class="text-nowrap">Since yesterday</span>
                            </p>
                        </div>
                    </div>
                </div>
          
            </div>
            <div class="card">
    <div class="card-body py-4">
        <div class="chart">
            <!-- Chart wrapper -->
            <canvas id="chart-orders" class="chart-canvas"></canvas>
        </div>
    </div>
</div>
        </div>
    
    </div>

</div>

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>2022,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
<script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="/assets/vendor/chart.js/dist/Chart.extension.js"></script>
<script>
            
            // line chart data
            var buyerData = {
                labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
                datasets : [
                {
                    fillColor : "#ffffff",
                    strokeColor : "#09BA95",
                    pointColor : "#09BA96",
                    pointStrokeColor : "#09B995",
                    data : [80,63,45,81,62,100,63,78,59,89,78,63]
                }
            ]
            }
            // get line chart canvas
            var buyers = document.getElementById('buyers').getContext('2d');
            // draw line chart
            new Chart(buyers).Line(buyerData);
            // pie chart data
            var pieData = [
                {
                    value: 20,
                    color:"#09BA95"
                },
                {
                    value : 40,
                    color : "#09BA95"
                },
                {
                    value : 10,
                    color : "#09BA95"
                },
                {
                    value : 30,
                    color : "#09BA95"
                }
            ];
            // pie chart options
            var pieOptions = {
                 segmentShowStroke : true,
                 animateScale : true
            }

        </script>
        <!-- chart end code  -->
        <!-- Argon JS -->
@endsection
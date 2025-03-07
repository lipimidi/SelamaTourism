<!--
=========================================================
* Argon Dashboard 2 PRO - v2.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/argon-dashboard-pro 
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php"); ?>


<body class="g-sidenav-show   bg-gray-100">

  <!-- End Google Tag Manager (noscript) -->
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidenav.php"); ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar.php"); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">


      <div class="row">
        <div class="col-xl-7">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Recent Bookings</h5>
              <!-- <p class="text-sm mb-0">
                A lightweight, extendable, dependency-free javascript HTML table plugin.
              </p> -->
            </div>
            <div class="table-responsive">
              <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
                <div class="dataTable-top">
                  <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                      </select> entries per page</label></div>
                </div>
                <div class="dataTable-container" style="height: 500.641px;">
                  <table class="table table-flush dataTable-table" id="datatable-basic">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""
                          style="width: 18.0741%;"><a href="#" class="dataTable-sorter">Date</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""
                          style="width: 24.2963%;"><a href="#" class="dataTable-sorter">Session</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""
                          style="width: 33.6296%;"><a href="#" class="dataTable-sorter">Person</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""
                          style="width: 20.2963%;"><a href="#" class="dataTable-sorter">Status</a></th>
                      </tr>
                    </thead>
                    <tbody>
              
                    </tbody>
                  </table>
                </div>
                <div class="dataTable-bottom">
                  <div class="dataTable-info">Showing 1 to 10 of 57 entries</div>
                  <nav class="dataTable-pagination">
                    <ul class="dataTable-pagination-list">
                      <li class="pager"><a href="#" data-page="1">‹</a></li>
                      <li class="active"><a href="#" data-page="1">1</a></li>
                      <li class=""><a href="#" data-page="2">2</a></li>
                      <li class=""><a href="#" data-page="3">3</a></li>
                      <li class=""><a href="#" data-page="4">4</a></li>
                      <li class=""><a href="#" data-page="5">5</a></li>
                      <li class=""><a href="#" data-page="6">6</a></li>
                      <li class="pager"><a href="#" data-page="2">›</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 ms-auto mt-xl-0 mt-4">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8 my-auto">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold opacity-7">Wheather today</p>
                        <h5 class="font-weight-bolder mb-0">
                          San Francisco - 29°C
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <img class="w-50"
                        src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/small-logos/icon-sun-cloud.png"
                        alt="image sun">
                      <h5 class="mb-0 text-end me-1">Cloudy</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body text-center">
                  <h1 class="text-gradient text-primary"><span id="status1" countto="21">21</span> <span
                      class="text-lg ms-n2">°C</span></h1>
                  <h6 class="mb-0 font-weight-bolder">Living Room</h6>
                  <p class="opacity-8 mb-0 text-sm">Temperature</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
              <div class="card">
                <div class="card-body text-center">
                  <h1 class="text-gradient text-primary"> <span id="status2" countto="44">44</span> <span
                      class="text-lg ms-n1">%</span></h1>
                  <h6 class="mb-0 font-weight-bolder">Outside</h6>
                  <p class="opacity-8 mb-0 text-sm">Humidity</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body text-center">
                  <h1 class="text-gradient text-primary"><span id="status3" countto="87">87</span> <span
                      class="text-lg ms-n2">m³</span></h1>
                  <h6 class="mb-0 font-weight-bolder">Water</h6>
                  <p class="opacity-8 mb-0 text-sm">Consumption</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
              <div class="card">
                <div class="card-body text-center">
                  <h1 class="text-gradient text-primary"><span id="status4" countto="417">417</span> <span
                      class="text-lg ms-n2">GB</span></h1>
                  <h6 class="mb-0 font-weight-bolder">Internet</h6>
                  <p class="opacity-8 mb-0 text-sm">All devices</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

    </div>
  </main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/togglenav.php"); ?>

  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>

</body>

</html>
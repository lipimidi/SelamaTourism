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


<body class="g-sidenav-show   bg-gray-200">

  <!-- End Google Tag Manager (noscript) -->
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidenav.php"); ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar.php"); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">


      <div class="row">
        <div class="col-lg-7 col-12">
          <div class="card shadow-lg ">
            <!-- Card header -->
            <div class="card-header">
              <div class="row">
                <div class="col">
                  <div class="d-flex align-items-center">
                    <h5 class="mb-0"> Recent Bookings
                    </h5>
                    <a href="<?php echo $rootPath ?>/book/" class="btn btn-sm bg-gradient-primary ms-auto mb-0">
                      More
                    </a>
                  </div>
                </div>
              </div>
              <!-- <p class="text-sm mb-0">
                A lightweight, extendable, dependency-free javascript HTML table plugin.
              </p> -->
            </div>
            <div class=" ">
              <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
                <!-- <div class="dataTable-top">
                  <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                      </select> entries per page</label></div>
                </div> -->
                <div class="dataTable-container" class="">
                  <table class="table table-flush dataTable-table" id="book_list">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">REF</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">Date</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">Session</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">People</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">Date Created</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#"> </a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr>
                        <td class="text-sm font-weight-normal">Tiger Nixon</td>
                        <td class="text-sm font-weight-normal">System Architect</td>
                        <td class="text-sm font-weight-normal">Edinburgh</td>
                        <td class="text-sm font-weight-normal">61</td>
                        <td class="text-sm font-weight-normal">2011/04/25</td>
                        <td class="text-sm font-weight-normal">$320,800</td>
                      </tr> -->

                    </tbody>
                  </table>
                </div>
                <!-- <div class="dataTable-bottom">
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
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-5 ms-auto mt-xl-0 mt-4">
          <div class="row  ">
            <div class="col-12">
              <div class="card  shadow-lg">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-12 my-auto">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold opacity-7">Weather today</p>
                        <h5 class="font-weight-bolder mb-0">
                          Lata Puteh - 29°C
                        </h5>
                      </div>
                    </div>
                    <div class="col-12 text-center   ">
                      <img class="w-100"
                        src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/small-logos/icon-sun-cloud.png"
                        alt="image sun">
                      <h5 class="mb-0 text-center me-1">Cloudy</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12">
          <div class="card shadow-lg">
            <div class="card-header bg-transparent">
              <h5>Map</h5>
              <!-- <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="input-group input-group-lg">
                    <span class="input-group-text text-body bg-transparent border-0">
                      <i class="ni ni-zoom-split-in text-lg" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search anything..." onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 my-auto ms-auto">
                  <div class="d-flex align-items-center">
                    <i class="ni ni-headphones text-lg text-body ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Headphones connected" data-bs-original-title="Headphones connected"></i>
                    <i class="ni ni-button-play text-lg text-body ms-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Music is playing" data-bs-original-title="Music is playing"></i>
                    <i class="ni ni-button-power text-lg text-body ms-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Start radio" data-bs-original-title="Start radio"></i>
                    <i class="ni ni-watch-time text-lg text-body ms-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Time tracker" data-bs-original-title="Time tracker"></i>
                    <h4 class="text-body mb-1 ms-4">10:45</h4>
                  </div>
                </div>
              </div> -->
              <!-- <hr class="horizontal light">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="d-flex align-items-center position-relative">
                    <h3 class="text-body mb-1">11:13</h3>
                    <p class="text-body opacity-8 mb-1 ms-3">Estimated arrival time</p>
                    <hr class="vertical light mt-0">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="d-flex align-items-center position-relative">
                    <h3 class="text-body mb-1 ms-md-auto">2.4<small class="align-top text-sm">Km</small></h3>
                    <p class="text-body opacity-8 mb-1 ms-3 me-auto">Turn right in 2.4 miles</p>
                    <hr class="vertical light mt-0">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 ms-lg-auto">
                  <div class="d-flex align-items-center">
                    <h3 class="text-body mb-1 ms-lg-auto">6.3<small class="align-top text-sm">Km</small></h3>
                    <p class="text-body opacity-8 mb-1 ms-3">Distance to Creative Tim</p>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="card-body px-0 py-0">
              <div id="mapid"
                class="leaflet leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                tabindex="0" style="position: relative;">
                <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                  <div class="leaflet-pane leaflet-tile-pane">
                    <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                      <div class="leaflet-tile-container leaflet-zoom-animated"
                        style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                          src="https://a.basemaps.cartocdn.com/rastertiles/light_all/11/585/783.png"
                          class="leaflet-tile leaflet-tile-loaded"
                          style="width: 256px; height: 256px; transform: translate3d(381px, -5px, 0px); opacity: 1;"><img
                          alt="" src="https://b.basemaps.cartocdn.com/rastertiles/light_all/11/586/783.png"
                          class="leaflet-tile leaflet-tile-loaded"
                          style="width: 256px; height: 256px; transform: translate3d(637px, -5px, 0px); opacity: 1;"><img
                          alt="" src="https://d.basemaps.cartocdn.com/rastertiles/light_all/11/584/783.png"
                          class="leaflet-tile leaflet-tile-loaded"
                          style="width: 256px; height: 256px; transform: translate3d(125px, -5px, 0px); opacity: 1;"><img
                          alt="" src="https://c.basemaps.cartocdn.com/rastertiles/light_all/11/587/783.png"
                          class="leaflet-tile leaflet-tile-loaded"
                          style="width: 256px; height: 256px; transform: translate3d(893px, -5px, 0px); opacity: 1;"><img
                          alt="" src="https://c.basemaps.cartocdn.com/rastertiles/light_all/11/583/783.png"
                          class="leaflet-tile leaflet-tile-loaded"
                          style="width: 256px; height: 256px; transform: translate3d(-131px, -5px, 0px); opacity: 1;"><img
                          alt="" src="https://d.basemaps.cartocdn.com/rastertiles/light_all/11/588/783.png"
                          class="leaflet-tile leaflet-tile-loaded"
                          style="width: 256px; height: 256px; transform: translate3d(1149px, -5px, 0px); opacity: 1;">
                      </div>
                    </div>
                  </div>
                  <div class="leaflet-pane leaflet-overlay-pane"></div>
                  <div class="leaflet-pane leaflet-shadow-pane"></div>
                  <div class="leaflet-pane leaflet-marker-pane"></div>
                  <div class="leaflet-pane leaflet-tooltip-pane"></div>
                  <div class="leaflet-pane leaflet-popup-pane"></div>
                  <div class="leaflet-proxy leaflet-zoom-animated"></div>
                </div>
                <div class="leaflet-control-container">
                  <div class="leaflet-top leaflet-left">
                    <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in"
                        href="#" title="Zoom in" role="button" aria-label="Zoom in" aria-disabled="false"><span
                          aria-hidden="true">+</span></a><a class="leaflet-control-zoom-out" href="#" title="Zoom out"
                        role="button" aria-label="Zoom out" aria-disabled="false"><span aria-hidden="true">−</span></a>
                    </div>
                  </div>
                  <div class="leaflet-top leaflet-right"></div>
                  <div class="leaflet-bottom leaflet-left"></div>
                  <div class="leaflet-bottom leaflet-right">
                    <!-- <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com"
                        title="A JavaScript library for interactive maps"><svg aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8"
                          class="leaflet-attribution-flag">
                          <path fill="#4C7BE1" d="M0 0h12v4H0z"></path>
                          <path fill="#FFD500" d="M0 4h12v3H0z"></path>
                          <path fill="#E0BC00" d="M0 7h12v1H0z"></path>
                        </svg> Leaflet</a> <span aria-hidden="true">|</span> © <a
                        href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors © <a
                        href="https://carto.com/attributions">CARTO</a></div> -->
                  </div>
                </div>
              </div>
              <!-- <div id="map" style="width: 100%; height: 500px;"></div> -->

            </div>
            <div class="card-footer">
              <!-- <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="d-flex align-items-center">
                    <div class="position-relative">
                      <div class="avatar avatar-lg">
                        <img src="../../assets/img/bruce-mars.jpg" alt="kal" class="border-radius-xl rounded-circle shadow">
                      </div>
                      <img class="position-absolute w-60 end-0 bottom-0 me-n3 mb-0" src="../../assets/img/small-logos/logo-spotify.svg" alt="spotify logo">
                    </div>
                    <div class="px-3">
                      <p class="text-body text-sm font-weight-bold mb-0">
                        You're Mines Still (feat Drake)
                      </p>
                      <p class="text-body text-xs mb-2 opacity-8">
                        Yung Bleu - Hip-Hop
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 my-auto text-center mt-3 mt-lg-0">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-dark mb-0 ms-auto">
                      <i class="ni ni-button-play top-0 rotate-180" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-dark mb-0 ms-4">
                      <i class="ni ni-button-pause top-0" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-dark mb-0 ms-4 me-auto">
                      <i class="ni ni-button-play top-0" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-8 my-auto">
                  <p class="text-body mb-2">Volume</p>
                  <div id="sliderRegular" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.4, 1);"></div></div><div class="noUi-origin" style="transform: translate(-60%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="40.0" aria-valuetext="40.00"><div class="noUi-touch-area"></div></div></div></div></div>
                </div>
                <div class="col-lg-1 col-md-6 col-4 my-auto ms-auto">
                  <i class="ni ni-bullet-list-67 text-body mt-3 ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Hide menu" data-bs-original-title="Hide menu"></i>
                  <i class="ni ni-chat-round text-body ms-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Track messages" data-bs-original-title="Track messages"></i>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>

      <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

    </div>
  </main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/togglenav.php"); ?>

  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>


  <script>

    $(document).ready(function () {



      $('#book_list').DataTable({
        ajax: {
          url: '<?php echo $rootPath; ?>/book/getlist_user',  // Your server-side URL
          method: 'POST',  // Use POST for security
          data: function (d) {
            // Pass additional DataTables parameters to the server via POST
            return {
              start: d.start,                   // Starting point for pagination
              length: 5,                 // Number of rows per page
              search: d.search.value,           // Global search term
              order: d.order,                   // Sorting details
              columns: d.columns,               // Column info, useful if needed
              draw: d.draw,                     // Draw counter for DataTables
              getlist_user: "getlist_user",     // This will be used to identify the request in PHP
            };
          }
        },
        columns: [
          // { data: 'id'},
          { data: 'id' },
          { data: 'booking_date' },
          { data: 'timeslot_id' },
          { data: 'people_booked' },
          { data: 'created_at' },
          {
            data: 'id',  // We use the `id` to add the "More Details" button
            render: function (data, type, row) {
              // Return the HTML for the "More Details" button
              return '<a class="btn bg-gradient-primary more-details"  href="<?php echo $rootPath ?>/book/' + data + '" data-id="' + data + '">More Details</a>';
            }
          },
        ],
        columnDefs: [
          // Prioritize the first column (Name)
          { responsivePriority: 1, targets: 1 }, // First column (Name)
          // Prioritize the last column (Salary)
          { responsivePriority: 1, targets: -1 } // Last column (Salary)
        ],
        order: [[0, 'desc']],  // Default sorting by ID column
        serverSide: true,     // Enable server-side processing
        paging: true,         // Enable pagination
        searching: false,      // Enable searching
        select: false,         // Enable row selection
        processing: true,     // Show a processing indicator while loading data
        responsive: true,     // Make the table responsive
        ordering: false,
        pageLength: 5, // Limit to 5 rows per page
        lengthChange: false,

      });
    });


  </script>
  <script>
    // Initialize the map and assign it to a variable for later use
    var map = L.map('mapid', {
      center: [4.8833, 100.7667], // Coordinates for Lata Puteh
      zoom: 11
    });

    // Create a Tile Layer and add it to the map
    var tiles = new L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/light_all/{z}/{x}/{y}.png', {
      // attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
      subdomains: 'abcd',
      maxZoom: '19'
    }).addTo(map);

    var customIcon = L.icon({
      iconUrl: '<?php echo $rootPath; ?>/assets/img/lataputeh.jpg',  // Replace with your image URL
      iconSize: [50, 50],   // Adjust the size to match your image dimensions
      iconAnchor: [15, 50], // Set the anchor point (bottom center of the icon)
      popupAnchor: [0, -45] // Position of the popup
    });

    // Create a marker with the custom icon
    var marker = L.marker([4.8833, 100.7667], { icon: customIcon }).addTo(map)
      .bindPopup('<b>Lata Puteh Waterfall</b><br>Located in Batu Kurau, Perak.')
      .openPopup();


  </script>
</body>

</html>
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
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidenav.php"); ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar.php"); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="mt-5 text-white">Secure your spot now</h3>
          <h5 class="text-white font-weight-normal">Customize your experience today!</h5>

          <div class="multisteps-form mb-5">



            <div class="row  mt-5">
              <div class="col-lg-6 col-12">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="card overflow-hidden shadow-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reports1.jpg');
background-size: cover;">
                      <span class="mask bg-gradient-dark"></span>
                      <div class="card-body p-3 position-relative">
                        <div class="row">
                          <div class="col-8 text-start">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                              <i class="ni ni-circle-08  text-white text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-white font-weight-bolder mb-0 mt-3">
                              <?php echo count($guide_details) ?>
                            </h5>
                            <span class="text-white text-sm">People</span>
                          </div>
                          <div class="col-4">

                            <!-- <p class="text-white text-sm text-end font-weight-bolder mt-6 mb-auto">+55%</p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
                    <div class="card overflow-hidden shadow-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reports2.jpg');
background-size: cover;">
                      <span class="mask bg-gradient-dark"></span>
                      <div class="card-body p-3 position-relative">
                        <div class="row">
                          <div class="col-8 text-start">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                              <i class="ni ni-calendar-grid-58  text-white text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-white font-weight-bolder mb-0 mt-3">
                              <?php $guide_date = new DateTime($guide['date']);
                              echo $guide_date->format('d/m/Y');  // Output: 23/07/2025 ?>
                            </h5>
                            <span class="text-white text-sm">Date</span>
                          </div>
                          <div class="col-4">

                            <!-- <p class="text-white text-sm text-end font-weight-bolder mb-auto mt-6">+124%</p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row mt-4">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="card overflow-hidden shadow-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reports3.jpg');
background-size: cover;">
                      <span class="mask bg-gradient-dark"></span>
                      <div class="card-body p-3 position-relative">
                        <div class="row">
                          <div class="col-8 text-start">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                              <i class="ni ni-watch-time  text-white text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-white font-weight-bolder mb-0 mt-3">
                              <?php

                              $start_time = new DateTime($guide['start_time']);  // Convert start time to DateTime
                              $end_time = new DateTime($guide['end_time']);      // Convert end time to DateTime
                              
                              echo $start_time->format('g:i A') . ' - ' . $end_time->format('g:i A');  // Output: 8:00 AM - 12:00 PM
                              
                              ?>
                            </h5>
                            <span class="text-white text-sm">Time</span>
                          </div>
                          <div class="col-4">

                            <!-- <p class="text-white text-sm text-end font-weight-bolder mt-6 mb-auto">+15%</p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
                    <div class="card overflow-hidden shadow-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reports4.jpg');
background-size: cover;">
                      <span class="mask bg-gradient-dark"></span>
                      <div class="card-body p-3 position-relative">
                        <div class="row">
                          <div class="col-8 text-start">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                              <i class="ni ni-check-bold text-white   text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-white font-weight-bolder mb-0 mt-3 text-capitalize">
                              <?php echo $guide_status ?>
                            </h5>
                            <span class="text-white text-sm">Status</span>
                          </div>
                          <div class="col-4">
                            <!-- <p class="text-white text-sm text-end font-weight-bolder mt-6 mb-auto">+15%</p> -->
                            <button type="button"
                              class="btn btn-block bg-gradient-primary mb-auto  mt-6  text-end text-capitalize"
                              data-bs-toggle="modal" data-bs-target="#modal-editstatus"><i class="fa fa-pencil-square-o"
                                aria-hidden="true"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-6 col-12  mt-4 mt-lg-0">
                <div class="row">
                  <div class="col-12">
                    <div class="card overflow-hidden shadow-lg">
                      <div class="card-body p-3">
                        <div class="row gx-4">
                          <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                              <img src="<?php echo $rootPath . "/" . $guide['image'] ?>" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                            </div>
                          </div>
                          <div class="col-auto my-auto">
                            <div class="h-100">
                              <h5 class="mb-1">
                                <?php echo $guide['name'] ?>
                              </h5>
                              <p class="mb-0 font-weight-bold text-sm">
                                Guide
                              </p>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card overflow-hidden shadow-lg">
                      <span class="mask bg-gradient-dark"></span>
                      <div class="card-body p-3 position-relative">
                        <div class="row">
                          <div class="col-8 text-start">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                              <i class="ni ni-watch-time text-white text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-white font-weight-bolder mb-0 mt-3">
                              Scan QR for Attendance
                            </h5>
                            <!-- <span class="text-white text-sm">Click to start scanning QR</span> -->
                          </div>
                          <div class="col-4">
                            <!-- Button to Start QR Code Scan -->
                            <button id="start-scan-btn" class="btn   bg-gradient-primary  w-100">
                              Start QR Scan
                            </button>

                            <!-- Container for QR Code Scanner -->
                          </div>
                          <div class="col-12">
                            <div id="qr-reader" style="display: none;"></div>

                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>


            </div>


            <div class="row my-4">
              <div class="col-12">
                <div class="card">
                  <!-- Card header -->
                  <!-- <div class="card-header">
              <h5 class="mb-0">Datatable Simple</h5>
              <p class="text-sm mb-0">
                A lightweight, extendable, dependency-free javascript HTML table plugin.
              </p>
            </div> -->
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
                        <table class="table table-flush dataTable-table" id="guide_list">
                          <thead class="thead-light">
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                data-sortable=""><a href="#">REF</a></th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                data-sortable=""><a href="#">Name</a></th>

                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                data-sortable=""><a href="#">IC</a></th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                data-sortable=""><a href="#">Phone</a></th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                data-sortable=""><a href="#">Address</a></th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                data-sortable=""><a href="#">Email</a></th>
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
            </div>
          </div>
        </div>


      </div>
    </div>
    </div>
    </div>
    </div>

    <div>
      <!-- Modal Template (This will be reused dynamically via JS) -->
      <!-- Modal Template (Static) -->
      <div class="modal fade" id="dynamicModal" tabindex="-1" role="dialog" aria-labelledby="modal-default"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default"></h6>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="guide_details_id">
              <label for="status_num">Select Status:</label>
              <select name="status_num" id="status_num">

                <?php $statusArray = getHikingStatuses();

                foreach ($statusArray as $key => $status) {

                  if ($status !== '') { ?>
                    <option value="<?php echo $key ?>"><?php echo $status ?></option>

                    <?php



                  }



                }
                ?>

              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-primary" id="saveStatusHike">Save changes</button>
              <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="modal-editstatus" tabindex="-1" role="dialog" aria-labelledby="modal-default"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default"></h6>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form method="POST">


              <div class="modal-body">
                <input type="hidden" name="guide_id" value="<?php echo $guide_id ?>">
                <input type="hidden" name="date" value="<?php echo $date ?>">
                <input type="hidden" name="timeslot_id" value="<?php echo $date ?>">
                <label for="status_num">Select Status:</label>
                <select name="status_num_guide">

                  <?php $statusArray = getGuideStatuses();

                  foreach ($statusArray as $key => $status) {

                    if ($status !== '') { ?>
                      <option value="<?php echo $key ?>"><?php echo $status ?></option>

                      <?php



                    }



                  }
                  ?>

                </select>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn bg-gradient-primary" name="SaveGuideStatus">Save changes</button>
                <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Close</button>
              </div>
            </form>
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



      $('#guide_list').DataTable({
        ajax: {
          url: '<?php echo $rootPath; ?>/guide/getlist_guide',  // Your server-side URL
          method: 'POST',  // Use POST for security
          data: function (d) {
            // Pass additional DataTables parameters to the server via POST

            console.log(d.search.value);
            return {
              start: d.start,                   // Starting point for pagination
              length: d.length,                 // Number of rows per page
              search: d.search.value,           // Global search term
              order: d.order,                   // Sorting details
              columns: d.columns,               // Column info, useful if needed
              draw: d.draw,                     // Draw counter for DataTables
              getlist_people_guide: "getlist_people_guide",     // This will be used to identify the request in PHP
              guide_id: "<?php echo $guide_id ?>",     // This will be used to identify the request in PHP

              // user_id: "<?php echo $_SESSION['user_details']['id'] ?>",     // This will be used to identify the request in PHP

            };
          }
        },
        columns: [
          // { data: 'id'},
          { data: 'booking_id' },
          { data: 'name' },
          { data: 'ic' },
          { data: 'phone' },
          { data: 'address' },
          { data: 'email' },
          {
            data: 'id',  // We use the `id` to add the "More Details" button
            render: function (data, type, row) {
              // Return the HTML for the "More Details" button
              return '<a class="btn bg-gradient-primary more-details mx-2" href="javascript:void(0);" data-id="' + data + '" data-status="' + row.status + '" data-status2="' + row.status2 + '" data-name="' + row.name + '" data-guide_details="' + row.id + '" onclick="showModal(this)">' + row.status2 + '</a>';
            }
          },
        ],
        columnDefs: [
          // Prioritize the first column (Name)
          { responsivePriority: 1, targets: 1 },
          // Prioritize the last column (Salary)
          { responsivePriority: 1, targets: -1 }
        ],
        order: [[0, 'desc']],  // Default sorting by ID column
        serverSide: true,     // Enable server-side processing
        paging: true,         // Enable pagination
        searching: true,      // Enable searching
        select: false,         // Enable row selection
        processing: true,     // Show a processing indicator while loading data
        responsive: true,     // Make the table responsive
        ordering: false,


      });
    });

    // Trigger the modal with relevant data
    function showModal(button) {
      var id = $(button).data('id');  // Get the ID from the button's data-id attribute
      var status = $(button).data('status');  // Get the current status from the button's data-status
      var status2 = $(button).data('status2');  // Optionally, if you need another status
      var name = $(button).data('name');  // Optionally, if you need another status
      var guide_details_id = $(button).data('guide_details');  // Optionally, if you need another status

      // Set modal content dynamically
      $('#modal-title-default').text('Name: ' + name);  // Set modal title dynamically
      $('#status_num').val(status);  // Set the status dropdown value based on current status
      $('#guide_details_id').val(guide_details_id);  // Set the status dropdown value based on current status

      // Store the ID in a hidden attribute in the modal for use later when submitting
      $('#dynamicModal').data('id', id);

      // Show the modal
      $('#dynamicModal').modal('show');
    }

    // Handle save changes button click
    $('#saveStatusHike').click(function () {
      var id = $('#guide_details_id').val();   // Retrieve the ID stored in modal's data-attributes
      var status = $('#status_num').val();  // Get the selected status from the dropdown
      console.log("test");


      // Prepare data for POST request
      var postData = {
        id: id,
        guide_id: "<?php echo $guide_id ?>",
        status: status,
        // guide_details_id: guide_details_id,
        people_change_status: "people_change_status",
      };

      // Send data to server via jQuery's AJAX method
      $.ajax({
        url: '<?php echo $rootPath; ?>/guide/people_change_status',  // Your server-side URL
        type: 'POST',
        data: postData,
        success: function (response) {
          if (response) {
            console.log(response);
            $('#dynamicModal').modal('hide');  // Close the modal after success
            $('#guide_list').DataTable().ajax.reload(null, false);
          } else {
            // alert('Failed to save changes');
            console.log(response);
          }
        },
        error: function () {
          console.log("error1");
        }
      });
    });



  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const startScanBtn = document.getElementById('start-scan-btn');
      const qrReaderContainer = document.getElementById('qr-reader');

      // Function to handle scan success
      function onScanSuccess(decodedText, decodedResult) {
        // Optionally, you can send this data to your server using AJAX
        // fetch('process_qr.php', {...});

        // Prepare data for POST request
        var postData = {
          guide_id: decodedText,
          status: status,
          // guide_details_id: guide_details_id,
          people_change_status_qr: "people_change_status_qr",
        };

        $.ajax({
          url: '<?php echo $rootPath; ?>/guide/people_change_status',  // Your server-side URL
          type: 'POST',
          data: postData,
          success: function (response) {
            if (response) {
              console.log(postData);
              $('#dynamicModal').modal('hide');  // Close the modal after success
              $('#guide_list').DataTable().ajax.reload(null, false);
            } else {
              // alert('Failed to save changes');
              console.log(response);
            }
          },
          error: function () {
            console.log("error1");
          }
        });
      }

      // Initialize QR Scanner
      const html5QrcodeScanner = new Html5QrcodeScanner("qr-reader", { fps: 10, qrbox: 250 });

      // Click event to start QR code scanning
      startScanBtn.addEventListener('click', function () {
        // Show the scanner UI when the button is clicked
        qrReaderContainer.style.display = 'block';

        // Start scanning for QR codes
        html5QrcodeScanner.render(onScanSuccess);
      });
    });
  </script>


  <script>


    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('<?php echo $rootPath; ?>/service-worker.js') // your custom path
          .then(registration => {
            // console.log("Service Worker registered:", registration);

            const beamsClient = new PusherPushNotifications.Client({
              instanceId: 'bf10c984-1d60-42a1-8394-d2104b1dcd22',
              serviceWorkerRegistration: registration  // 🔑 THIS is required
            });



          })
          .catch((err) => {
            console.error('Error registering service worker:', err);
          });

      });
    }

  </script>

</body>

</html>
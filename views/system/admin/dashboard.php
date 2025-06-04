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
        <div class="col-lg-12">
          <div class="row">
            <!-- Bookings Needed Approval Card -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Bookings</p>
                        <h5 class="font-weight-bolder" id="total-bookings-approval">Total</h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle"
                        id="icon-bookings-approval">
                        <i class="ni ni-check-bold text-lg opacity-10" id="icon-bookings-approval-inner"
                          aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Guides Needed to Assign Card -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Tour Guides</p>
                        <h5 class="font-weight-bolder" id="total-guides-assign">Total</h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle"
                        id="icon-guides-assign">
                        <i class="ni ni-user-run text-lg opacity-10" id="icon-guides-assign-inner"
                          aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- People Registered Card -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Users</p>
                        <h5 class="font-weight-bolder" id="total-people-registered">Total</h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle"
                        id="icon-people-registered">
                        <i class="ni ni-bullet-list-67 text-lg opacity-10" id="icon-people-registered-inner"
                          aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Page Views Card -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card mb-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Page Views</p>
                        <h5 class="font-weight-bolder" id="total-page-views">Total</h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle"
                        id="icon-page-views">
                        <i class="ni ni-tv-2 text-lg opacity-10" id="icon-page-views-inner" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-8 mb-4 mb-lg-0">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent d-flex">
              <h5 class="text-capitalize ">Bookings Needed Approval</h5>

              <div class="nav-wrapper position-relative ms-auto  justify-content-end">
                <a class="  btn bg-gradient-primary more-details" href="<?php echo $rootPath ?>/book/list">More</a>
              </div>
            </div>
            <div class="card-body p-3">
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
                          data-sortable=""><a href="#">Status</a></th>
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

        <div class="col-lg-4 col-12  mb-4 mb-lg-0">
          <div class="card h-100 ">
            <div class="card-header">
              <h5 class="mb-0 text-capitalize">To do list</h5>
            </div>
            <div class="card-body pt-0">
              <ul class="list-group list-group-flush" id="checklist">
                <!-- Dynamic content will be inserted here -->
              </ul>
            </div>
          </div>
        </div>

      </div>

      <div class="row mt-4">
        <div class="col-7 mb-4 mb-lg-0">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent d-flex">
              <h5 class="text-capitalize ">Guides Needed Assign</h5>

              <div class="nav-wrapper position-relative ms-auto  justify-content-end">
                <a class="  btn bg-gradient-primary more-details" href="<?php echo $rootPath ?>/guide/assign">More</a>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-5 mb-4 mb-lg-0">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Active Guides</h6>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-flush dataTable-table" id="guide_list">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""><a
                        href="#">REF</a></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""><a
                        href="#">Date</a></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""><a
                        href="#">Session</a></th>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""><a
                        href="#">Date Created</a></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""><a
                        href="#">Status</a></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable=""><a
                        href="#"> </a></th>
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
          </div>
        </div>

      </div>

      <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="eventModalLabel">Guide</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h6 id="selectedDate">Selected Date: </h6>
              <form id="eventForm" method="POST">
                <input type="text" class="form-control" id="eventDate" name="date" hidden>

                <div class="mb-3">
                  <label for="eventSession" class="form-label">Session</label>
                  <input type="number" class="form-control" id="eventSession" name="session" hidden>
                  <input type="text" class="form-control" id="eventSession2" name="session2" readonly>

                </div>

                <div class="mb-3">
                  <label for="eventSession" class="form-label">Guide</label>
                  <select class="form-control form-control-lg" name="guide" id="select_user">
                    <?php

                    foreach ($guides as $guide) { ?>

                      <option value="<?php echo $guide['id'] ?>"><?php echo $guide['name'] ?></option>



                    <?php }

                    ?>
                  </select>
                </div>


                <button type="submit" class="btn btn-primary" name="assignguide">Assign</button>
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



      $('#book_list').DataTable({
        ajax: {
          url: '<?php echo $rootPath; ?>/book/getlist_admin',  // Your server-side URL
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
              status: "1",                     // Draw counter for DataTables
              getlist_admin: "getlist_admin",     // This will be used to identify the request in PHP
              user_id: "<?php echo $_SESSION['user_details']['id'] ?>",     // This will be used to identify the request in PHP
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
            data: 'status',  // We use the `status` to decide the button's class
            render: function (data, type, row) {
              // Determine the class based on the value of `status`
              let buttonClass = '';

              // Set the button class based on the `status` value
              if (data == 0) {
                buttonClass = 'bg-gradient-danger';  // Status 0: Danger
              } else if (data == 1) {
                buttonClass = 'bg-gradient-warning';  // Status 1: Warning
              } else if (data == 2) {
                buttonClass = 'bg-gradient-success';  // Status 2: Success
              } else {
                buttonClass = 'bg-gradient-secondary';  // Default class for other statuses
              }

              // Return the HTML with the dynamically set class
              return `<button class="btn ${buttonClass} more-details  text-capitalize">${row.status2}</button>`;
            }
          }, {
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
        paging: false,         // Enable pagination
        searching: false,      // Enable searching
        select: false,         // Enable row selection
        processing: true,     // Show a processing indicator while loading data
        responsive: true,     // Make the table responsive
        ordering: false,
        pageLength: 5, // Limit to 5 rows per page
        lengthChange: false,

      });







      function getEventTimeFormat() {
        // Check if the screen width is tablet size or smaller
        if (window.innerWidth <= 375) {
          return {
            hour: 'numeric',
            hour12: true,  // 12-hour format
            meridiem: 'narrow',
          };
        }
        else if (window.innerWidth <= 768) {
          return {
            hour: 'numeric',
            hour12: true,  // 12-hour format
          };
        } else {
          return {
            hour: 'numeric',
            minute: '2-digit',
            hour12: true,  // Use 12-hour format (AM/PM)
          };
        }
      }


      // Get the last viewed date from localStorage
      let lastViewedDate = localStorage.getItem('lastViewedDate');
      if (lastViewedDate) {
        lastViewedDate = new Date(lastViewedDate);
      }


      // Initialize the FullCalendar object
      var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
        initialView: "dayGridMonth",
        // initialDate: lastViewedDate || new Date(),
        headerToolbar: {
          start: '', // will normally be on the left. if RTL, will be on the right
          center: 'title',
          end: '' // will normally be on the right. if RTL, will be on the left
        },

        eventTimeFormat: getEventTimeFormat(),

        selectable: true,
        height: 'auto',  // Adjust the height automatically
        contentHeight: 'auto', // Make content height auto
        datesSet: function (info) {
          // Store the current visible date range (first date visible)
          localStorage.setItem('lastViewedDate', info.view.currentStart);
        },
        events: function (fetchInfo, successCallback, failureCallback) {
          console.log("Sending request to fetch events..."); // Debug log

          $.ajax({
            url: "<?php echo $rootPath; ?>/guide/booked",
            type: "POST",
            dataType: "json",
            data: {
              fetch_events_guide: true,
              start: fetchInfo.startStr,
              status: "0",
              end: fetchInfo.endStr,
              role: "<?php echo $_SESSION['user_details']['role']; ?>",
              user_id: "<?php echo $_SESSION['user_details']['id']; ?>",
            }, // Secure POST request
            success: function (response) {
              console.log("Response received:", response); // Debug log
              successCallback(response);
            },
            error: function (xhr, status, error) {
              console.error("Error fetching events:", status, error);
              failureCallback([]);
            }
          });
        },

        eventClick: function (info) {
          // Show the modal with the selected date
          var modal = new bootstrap.Modal(document.getElementById('eventModal'));
          var selectedDate = document.getElementById('eventDate');
          var selectedDate2 = document.getElementById('selectedDate');
          var selectedSession = document.getElementById('eventSession');
          var selectedSession2 = document.getElementById('eventSession2');
          var select_user = document.getElementById('select_user');
          if (info.event.extendedProps.user_id === null) {
            // Set select_user to a default value or an empty value if guide_id is null
            select_user.value = ''; // Or you can set to a default value like '0'
          } else {
            select_user.value = info.event.extendedProps.user_id;
          } selectedSession2.value = info.event.extendedProps.session2;

          // var selectedPeople = document.getElementById('eventPeople');
          // selectedPeople.max = info.event.extendedProps.remaining_slots;

          // Get the session value
          selectedSession.value = info.event.extendedProps.session;
          selectedDate.value = info.event.extendedProps.event_date;
          console.log(info.event.extendedProps);

          // Format the event start date to dd-mm-yyyy using native JavaScript
          var startDate = info.event.start;
          var day = String(startDate.getDate()).padStart(2, '0'); // Add leading zero if necessary
          var month = String(startDate.getMonth() + 1).padStart(2, '0'); // Get month and pad with zero
          var year = startDate.getFullYear();

          var formattedDate = day + '-' + month + '-' + year; // Format as dd-mm-yyyy

          // Set the selected date
          selectedDate2.innerText = 'Selected Date: ' + formattedDate;

          // Open the modal
          modal.show();
        },

        views: {
          month: {
            titleFormat: {
              month: "long",
              year: "numeric"
            }
          },
        },
      });

      // Render the calendar
      calendar.render();




      $('#guide_list').DataTable({
        ajax: {
          url: '<?php echo $rootPath; ?>/guide/booked',  // Your server-side URL
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
              getlist_admin_2: "getlist_admin_2",     // This will be used to identify the request in PHP
              user_id: "<?php echo $_SESSION['user_details']['id'] ?>",     // This will be used to identify the request in PHP
            };
          }
        },
        columns: [
          // { data: 'id'},
          { data: 'id' },
          { data: 'date' },
          { data: 'timeslot_id' },
          { data: 'created_at' },
          {
            data: 'status',  // We use the `status` to decide the button's class
            render: function (data, type, row) {
              // Determine the class based on the value of `status`
              let buttonClass = '';

              // Set the button class based on the `status` value
              if (data <= 2) {
                buttonClass = 'bg-gradient-warning';  // Status 0: Danger
              } else if (data == 3) {
                buttonClass = 'bg-gradient-success';  // Status 2: Success
              } else {
                buttonClass = 'bg-gradient-danger';  // Default class for other statuses
              }

              // Return the HTML with the dynamically set class
              return `<button class="btn ${buttonClass} more-details  text-capitalize">${row.status2}</button>`;
            }
          }, {
            data: 'id',  // We use the `id` to add the "More Details" button
            render: function (data, type, row) {
              // Return the HTML for the "More Details" button
              return '<a class="btn bg-gradient-primary more-details"  href="<?php echo $rootPath ?>/guide/' + data + '" data-id="' + data + '">More Details</a>';
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
        paging: false,         // Enable pagination
        searching: false,      // Enable searching
        select: false,         // Enable row selection
        processing: true,     // Show a processing indicator while loading data
        responsive: true,     // Make the table responsive
        ordering: false,
        pageLength: 5, // Limit to 5 rows per page
        lengthChange: false,

      });




      $.ajax({
        url: '<?php echo $rootPath ?>/admin/todolist',  // Replace with your actual server endpoint
        type: 'POST',
        data: {
          todolist: true,

        }, // Adjust method if needed (POST, PUT, etc.)
        success: function (response) {
          // Assuming `response` is an array of items to populate
          // Empty the checklist first
          let data = JSON.parse(response)
          $('#checklist').empty();

          // Loop through the response data and create the list items
          data.forEach(function (item) {
            // Create list item HTML
            const listItem = `
                        <li class="checklist-entry list-group-item px-0">
                            <div class="checklist-item checklist-item-success checklist-item-checked d-flex">
                                <div class="checklist-info">
                                    <h6 class="checklist-title mb-0">${item}</h6>
                                </div>
                            </div>
                        </li>
                    `;

            // Append the list item to the checklist


            $('#checklist').append(listItem);
          });
        },
        error: function (error) {
          console.error('Error loading checklist data:', error);
        }
      });





      $.ajax({
        url: '<?php echo $rootPath ?>/admin/todolist',  // Replace with your actual server endpoint
        type: 'POST',
        data: {
          dashboard: true,

        }, // Adjust method if needed (POST, PUT, etc.)
        success: function (response) {
          // Assuming `response` is an array of items to populate
          // Empty the checklist first
          console.log(response);
          let data = JSON.parse(response)
                  // Update the "Bookings Needed Approval" total dynamically
          $('#total-bookings-approval').text(data.bookings);

          // Update other totals as well
          $('#total-guides-assign').text(data.guides);
          $('#total-people-registered').text(data.users);
          $('#total-page-views').text(data.page);



        },
        error: function (error) {
          console.error('Error loading checklist data:', error);
        }
      });

   


    });


  </script>

</body>

</html>
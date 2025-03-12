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
        <div class="col-12 text-center">
          <h3 class="mt-5 text-white">Secure your spot now</h3>
          <h5 class="text-white font-weight-normal">Customize your experience today!</h5>

          <div class="multisteps-form mb-5">
            <!--progress bar-->
            <div class="row mt-5">
              <div class="col-12 col-lg-8 mx-auto my-5">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                    <span>Date</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Address">
                    <span>People</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                    <span>Insurance</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                    <span>Finish</span>
                  </button>
                </div>
              </div>
            </div>
            <!--form panels-->
            <div class="row mb-lg-7">
              <div class="col">
                <div class="card card-calendar">
                  <div class="card-body p-3">
                    <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                  </div>
                </div>
                <div class="button-row d-flex mt-4">
                  <a class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                    href="<?php echo $rootPath; ?>/book/people">Next</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- //modal -->
      <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="eventModalLabel">Booking</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h6 id="selectedDate">Selected Date: </h6>
              <form id="eventForm">
                <div class="mb-3">
                  <label for="eventTitle" class="form-label">People</label>
                  <input type="number" class="form-control" id="eventTitle" placeholder="Enter event title">
                </div>
                <button type="submit" class="btn btn-primary">Save Event</button>
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
    var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
      initialView: "dayGridMonth",
      headerToolbar: {
        start: 'title', // will normally be on the left. if RTL, will be on the right
        center: '',
        end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
      },
      selectable: true,
      // editable: true,
      // initialDate: '2020-12-01',
      // events: [
      //   {
      //     title: 'Full',
      //     start: '2025-03-11',
      //     end: '2025-03-11',
      //     className: 'bg-gradient-danger'
      //   },

      //   {
      //     title: '3/40',
      //     start: '2025-03-12',
      //     end: '2025-03-12',
      //     className: 'bg-gradient-warning'
      //   },



      //   {
      //     title: '40/40',
      //     start: '2025-03-13',
      //     end: '2025-03-13',
      //     className: 'bg-gradient-info'
      //   },
      //   {
      //     title: 'Full',
      //     start: '2025-03-11',
      //     end: '2025-03-11',
      //     className: 'bg-gradient-danger'
      //   },

      //   {
      //     title: '3/40',
      //     start: '2025-03-12',
      //     end: '2025-03-12',
      //     className: 'bg-gradient-warning'
      //   },



      //   {
      //     title: '40/40',
      //     start: '2025-03-13',
      //     end: '2025-03-13',
      //     className: 'bg-gradient-info'
      //   },

      //   // {
      //   //   title: 'Winter Hackaton',
      //   //   start: '2020-12-03',
      //   //   end: '2020-12-03',
      //   //   className: 'bg-gradient-danger'
      //   // },

      //   // {
      //   //   title: 'Digital event',
      //   //   start: '2020-12-07',
      //   //   end: '2020-12-09',
      //   //   className: 'bg-gradient-warning'
      //   // },

      //   // {
      //   //   title: 'Marketing event',
      //   //   start: '2020-12-10',
      //   //   end: '2020-12-10',
      //   //   className: 'bg-gradient-primary'
      //   // },

      //   // {
      //   //   title: 'Dinner with Family',
      //   //   start: '2020-12-19',
      //   //   end: '2020-12-19',
      //   //   className: 'bg-gradient-danger'
      //   // },

      //   // {
      //   //   title: 'Black Friday',
      //   //   start: '2020-12-23',
      //   //   end: '2020-12-23',
      //   //   className: 'bg-gradient-info'
      //   // },

      //   // {
      //   //   title: 'Cyber Week',
      //   //   start: '2020-12-02',
      //   //   end: '2020-12-02',
      //   //   className: 'bg-gradient-warning'
      //   // },

      // ],
      events: function (fetchInfo, successCallback, failureCallback) {
        console.log("Sending request to fetch events..."); // Debug log

        $.ajax({
          url: "<?php echo $rootPath; ?>/book/events",
          type: "POST",
          dataType: "json",
          data: { 
            fetch_events: true ,
            start: fetchInfo.startStr,
            end: fetchInfo.endStr,
            
          
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
      dateClick: function (info) {
        // Show the modal with the selected date
        var modal = new bootstrap.Modal(document.getElementById('eventModal'));
        var selectedDate = document.getElementById('selectedDate');
        selectedDate.innerText = 'Selected Date: ' + info.dateStr;  // Set the selected date

        // Open the modal
        modal.show();

        // Optionally, handle the form submission and save event
        var form = document.getElementById("eventForm");
        form.onsubmit = function (event) {
          event.preventDefault();
          var eventTitle = document.getElementById("eventTitle").value;
          if (eventTitle) {
            calendar.addEvent({
              title: eventTitle,
              start: info.date,
              allDay: true
            });
            modal.hide();  // Close the modal after saving the event
          }
        }
      },

      views: {
        month: {
          titleFormat: {
            month: "long",
            year: "numeric"
          }
        },
        agendaWeek: {
          titleFormat: {
            month: "long",
            year: "numeric",
            day: "numeric"
          }
        },
        agendaDay: {
          titleFormat: {
            month: "short",
            year: "numeric",
            day: "numeric"
          }
        }
      },
    });

    calendar.render();
  </script>
</body>

</html>
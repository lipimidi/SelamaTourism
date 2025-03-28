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




      <div class="row mt-4">

        <div class="col-12 ">
          <div class="card h-100 ">
            <div class="card-header">
              <h5 class="mb-0 text-capitalize">Calendar</h5>
            </div>
            <div class="card-body pt-0">
              <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
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
    document.addEventListener('DOMContentLoaded', function () {
      // Define the function to get event time format based on screen size
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

      // Initialize the FullCalendar object
      var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
        initialView: "dayGridMonth",
        headerToolbar: {
          start: 'title', // will normally be on the left. if RTL, will be on the right
          center: 'dayGridMonth,timeGridWeek',
          end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
        },

        eventTimeFormat: getEventTimeFormat(),
        allDaySlot: false,

        selectable: true,
        height: 'auto',  // Adjust the height automatically
        contentHeight: 'auto', // Make content height auto

        events: function (fetchInfo, successCallback, failureCallback) {
          console.log("Sending request to fetch events..."); // Debug log

          $.ajax({
            url: "<?php echo $rootPath; ?>/guide/booked",
            type: "POST",
            dataType: "json",
            data: {
              fetch_events_guide: true,
              start: fetchInfo.startStr,
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
          var guide_id = info.event.extendedProps.guide_id;

          window.location.href = "<?php echo $rootPath ?>/guide/" + guide_id;


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
    });
  </script>

</body>

</html>
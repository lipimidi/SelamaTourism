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

        <div class="col-lg-8 ">
          <div class="card h-100 ">
            <div class="card-header">
              <h5 class="mb-0 text-capitalize">Calendar</h5>
            </div>
            <div class="card-body pt-0">
              <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
            </div>
          </div>
        </div>

       <div class="col-12 col-lg-4 ms-auto mt-lg-0 mt-4">
          <div class="row">
            <div class="col-12">
              <div class="card shadow-lg">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-12 my-auto">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold opacity-7">Weather today</p>
                        <h5 class="font-weight-bolder mb-0" id="weather-temperature">
                          Lata Puteh - 29°C
                        </h5>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <!-- <img class="w-100" id="weather-icon"
                        src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/small-logos/icon-sun-cloud.png"
                        alt="image sun"> -->
                      <i id="weather-icon" class="fa " style="font-size:20rem"></i>

                      <h5 class="mb-0 text-center me-1" id="weather-description">Cloudy</h5>
                    </div>
                  </div>
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
          center: '',
          end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
        },

        eventTimeFormat: getEventTimeFormat(),

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



 $.ajax({
      url: 'https://api.data.gov.my/weather/forecast/?contains=Ds020@location__location_id',  // Your API URL
      type: 'GET',
      dataType: 'json',
      success: function (data) {
        // Get today's date in YYYY-MM-DD format
        let today = new Date().toISOString().split('T')[0];

        // Find today's weather data from the response
        let todayWeather = data.find(item => item.date === today);

        if (todayWeather) {
          // Extract temperature and weather summary
          let temperature = `${todayWeather.min_temp}°C - ${todayWeather.max_temp}°C`;
          let weatherSummary = todayWeather.summary_forecast;

          // Update the HTML elements with today's weather
          $('#weather-temperature').text(`Selama - ${temperature}`);
          $('#weather-description').text(weatherSummary);

          // You can add more logic here to display an appropriate weather icon based on the forecast summary
          let weatherIcon = getWeatherIcon(weatherSummary);
          // $('#weather-icon').attr('src', weatherIcon);
          $('#weather-icon').addClass(weatherIcon);

        } else {
          console.error('Weather data for today not found');
        }
      },
      error: function () {
        console.error('Error fetching weather data');
      }
    });

    // Function to get appropriate weather icon based on description
    function getWeatherIcon(description) {
      // Map descriptions to Font Awesome icons
      const iconMap = {
        "Berjerebu": "fas fa-smog",  // Hazy
        "Tiada hujan": "fas fa-sun",  // Clear
        "Hujan": "fas fa-cloud-showers-heavy",  // Rain
        "Hujan di beberapa tempat": "fas fa-cloud-showers-heavy",  // Scattered rain
        "Hujan di satu dua tempat": "fas fa-cloud-rain",  // Isolated Rain
        "Hujan di satu dua tempat di kawasan pantai": "fas fa-cloud-rain",  // Isolated rain over coastal areas
        "Hujan di satu dua tempat di kawasan pedalaman": "fas fa-cloud-rain",  // Isolated rain over inland areas
        "Ribut petir": "fas fa-bolt",  // Thunderstorms
        "Ribut petir di beberapa tempat": "fas fa-bolt",  // Scattered thunderstorms
        "Ribut petir di beberapa tempat di kawasan pedalaman": "fas fa-bolt",  // Scattered thunderstorms over inland areas
        "Ribut petir di satu dua tempat": "fas fa-bolt",  // Isolated thunderstorms
        "Ribut petir di satu dua tempat di kawasan pantai": "fas fa-bolt",  // Isolated thunderstorms over coastal areas
        "Ribut petir di satu dua tempat di kawasan pedalaman": "fas fa-bolt"  // Isolated thunderstorms over inland areas
      };

      // Return the corresponding Font Awesome icon class or a default one
      return iconMap[description] || "fas fa-sun";  // Default icon (sunny)
    }




    });




  </script>

</body>

</html>
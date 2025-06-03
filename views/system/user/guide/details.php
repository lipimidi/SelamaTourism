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
            <!--progress bar-->
            <!-- <div class="row mt-5">
              <div class="col-12 col-lg-8 mx-auto my-5">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn  js-active" type="button" title="User Info">
                    <span>Date</span>
                  </button>
                  <button class="multisteps-form__progress-btn  js-active" type="button" title="Address">
                    <span>People</span>
                  </button>
                  <button class="multisteps-form__progress-btn  js-active" type="button" title="Order Info">
                    <span>Insurance</span>
                  </button>
                  <button class="multisteps-form__progress-btn  js-active" type="button" title="Order Info">
                    <span>Finish</span>
                  </button>
                </div>
              </div>
            </div> -->
            <!--form panels-->



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

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php if ($guide['status'] != '0') { ?>


                <div class="col-lg-6 col-0 mt-4 mt-lg-0">
                  <div class="card  ">
                    <div class="card-header pb-0 p-3">
                      <h6 class="mb-0">QR Code



                      </h6>
                    </div>
                    <div class="card-body pb-0 p-3">

                    </div>

                    <div class="col-12 text-center">
                      <?php

                      $data = $guide_details['0']['booking_id'];
                      $logoPath = $basePath2 . '/assets/img/android-chrome-512x512.png'; // Path to your logo image
                      $base64QRCode = generateQRCodeWithLogo($data, $logoPath);
                      ?>

                      <img src="data:image/png;base64,<?php echo $base64QRCode; ?>" alt="QR Code" />



                    </div>

                  </div>

                </div>
              <?php } ?>

            </div>


            <div class="row my-4">
              <div class="  col-12 mt-lg-0 mt-4 order-lg-1 order-2">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">IC
                          </th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Email</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Address</th>
                          <?php if ($guide['status'] > 1) { ?>

                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              Status
                            </th>
                          <?php } ?>


                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        foreach ($guide_details as $index => $detail) {

                          $name = $detail['name'];
                          $ic = $detail['ic'];
                          $phone = $detail['phone'];
                          $email = $detail['email'];
                          $address = $detail['address'];
                          $id = $detail['booking_id'];
                          $people_status = $detail['status'];
                          $personFolder = 'person_' . ($index + 1);  // person_1, person_2, etc.
                          $file = $detail['file'];

                          $filepath = $basePath . '/assets/uploads/booking/insurance/' . $guide_id . '/' . $personFolder . '/' . $file;


                          ?>
                          <tr>

                            <td>
                              <div class="d-flex px-2 py-1">

                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?php echo $name ?></h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">

                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?php echo $ic ?></h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">

                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?php echo $phone ?></h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">

                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?php echo $email ?></h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">

                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?php echo $address ?></h6>
                                </div>
                              </div>
                            </td>
                            <?php

                            if ($guide['status'] > 1) { ?>

                              <td>
                                <div class="d-flex px-2 py-1 justify-content-center">

                                  <div class="d-flex flex-column justify-content-center">

                                    <button class="btn btn-block bg-gradient-primary mb-3">
                                      <?php echo getHikingStatuses($people_status) ?>
                                    </button>

                                  </div>
                                </div>
                              </td>
                            <?php } ?>

                          </tr>
                        <?php } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- 
              <div class="col-lg-4 col-12 mt-lg-0 mt-4 order-lg-2 order-1">
                <div class="card h-100">
                  <div class="card-header pb-0">
                    <h6>To Do</h6>
                    <p class="text-sm">
                      <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                    </p>
                  </div>
                  <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                      <div class="timeline-block mb-3">
                        <span class="timeline-step">
                          <i class="ni ni-bell-55 text-success"></i>
                        </span>
                        <div class="timeline-content">
                          <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                          <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                        </div>
                      </div>
                      <div class="timeline-block mb-3">
                        <span class="timeline-step">
                          <i class="ni ni-html5 text-danger"></i>
                        </span>
                        <div class="timeline-content">
                          <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                          <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                        </div>
                      </div>
                      <div class="timeline-block mb-3">
                        <span class="timeline-step">
                          <i class="ni ni-cart text-info"></i>
                        </span>
                        <div class="timeline-content">
                          <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                          <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                        </div>
                      </div>
                      <div class="timeline-block mb-3">
                        <span class="timeline-step">
                          <i class="ni ni-credit-card text-warning"></i>
                        </span>
                        <div class="timeline-content">
                          <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                          <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                        </div>
                      </div>
                      <div class="timeline-block mb-3">
                        <span class="timeline-step">
                          <i class="ni ni-key-25 text-primary"></i>
                        </span>
                        <div class="timeline-content">
                          <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                          <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                        </div>
                      </div>
                      <div class="timeline-block mb-3">
                        <span class="timeline-step">
                          <i class="ni ni-box-2 text-dark"></i>
                        </span>
                        <div class="timeline-content">
                          <h6 class="text-dark text-sm font-weight-bold mb-0">Launch the product</h6>
                          <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 09:00 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
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


    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('<?php echo $rootPath; ?>/service-worker.js') // your custom path
          .then(registration => {
            // console.log("Service Worker registered:", registration);

            const beamsClient = new PusherPushNotifications.Client({
              instanceId: 'bf10c984-1d60-42a1-8394-d2104b1dcd22',
              serviceWorkerRegistration: registration  // 🔑 THIS is required
            });


            beamsClient.start()
              .then(() => {
                // Subscribe the device to the correct interest
                beamsClient.addDeviceInterest('guide-<?php echo $guide_id ?>')
                  .then(() => {
                    console.log('Successfully subscribed to <?php echo $guide_id ?>');
                  })
                  .catch(err => {
                    console.error('Error subscribing to interest', err);
                  });
              })
              .catch((err) => {
                console.error('Error initializing PusherBeams:', err);
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
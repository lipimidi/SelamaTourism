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
                              <?php echo $booking['people_booked'] ?>
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
                              <?php $booking_date = new DateTime($booking['booking_date']);
echo $booking_date->format('d/m/Y');  // Output: 23/07/2025 ?>
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
                              
                              $start_time = new DateTime($booking['start_time']);  // Convert start time to DateTime
$end_time = new DateTime($booking['end_time']);      // Convert end time to DateTime

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
                            <?php echo $booking_status ?>
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


            </div>


            <div class="row my-4">
              <div class="col-12">
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
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        foreach ($booking_details as $index => $detail) {

                          $name = $detail['name'];
                          $ic = $detail['ic'];
                          $phone = $detail['phone'];
                          $email = $detail['email'];
                          $address = $detail['address'];
                          $id = $detail['booking_id'];

                          $personFolder = 'person_' . ($index + 1);  // person_1, person_2, etc.
                          $file = $detail['file'];

                          $filepath = $rootPath . '/assets/uploads/booking/insurance/' . $booking_id . '/' . $personFolder . '/' . $file;


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
                            <td>
                              <div class="d-flex px-2 py-1">

                              <?php
                                $ext = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
                                $type = ($ext === 'pdf') ? 'iframe' : 'image';


                                ?>

                                <a class="btn btn-block bg-gradient-primary mb-3" data-fancybox data-type="<?php echo $type; ?>"
                                  href="<?php echo  $filepath ?>">
                                  File
                                </a>

                              </div>
                            </td>
                          </tr>
                        <?php } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php if ($booking['status'] == 1) {?>

        <form method="POST">

          <div class="button-row d-flex mt-4">
            <input type="hidden" value="<?php echo $booking['id'] ?>" name="id">
            <input type="hidden" value="<?php echo $booking['booking_date'] ?>" name="booking_date">
            <input type="hidden" value="<?php echo $booking['timeslot_id'] ?>" name="timeslot_id">
            <input type="hidden" value="<?php echo $booking['email'] ?>" name="email">
            <input type="hidden" value="<?php echo $booking['people_booked'] ?>" name="people">
            <input type="hidden" value="<?php echo $start_time->format('g:i A') . ' - ' . $end_time->format('g:i A') ?>" name="time">

            <button type="submit" class="btn   bg-gradient-light mb-0 js-btn-prev   "
              name="declinebooking">Decline</button>

            <button type="submit" class="btn   bg-gradient-dark ms-auto mb-0    " name="acceptbooking">Accept</button>

          </div>

        </form>
        <?php }?>

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
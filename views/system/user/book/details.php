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
                              <?php echo $booking['booking_date'] ?>
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
                              <?php echo $booking['start_time'] ?> - <?php echo $booking['end_time'] ?>
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

              <?php if ($booking['status'] != 0) { ?>


                <div class="col-lg-6 col-0 mt-4 mt-lg-0">
                  <div class="card  ">
                    <div class="card-header pb-0 p-3">
                      <h6 class="mb-0">QR Code</h6>
                    </div>
                    <div class="card-body pb-0 p-3">

                    </div>

                    <div class="col-12 text-center">
                      <?php
                      $data = "test";
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
                          <?php if ($booking['status'] > 1) { ?>

                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              Status
                            </th>
                          <?php } ?>
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
                          $people_status = $detail['status'];
                          $personFolder = 'person_' . ($index + 1);  // person_1, person_2, etc.
                          $file = $detail['file'];

                          $filepath = $basePath . '/assets/uploads/booking/insurance/' . $booking_id . '/' . $personFolder . '/' . $file;


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

                            if ($booking['status'] > 1) { ?>

                              <td>
                                <div class="d-flex px-2 py-1">

                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"><?php echo getHikingStatuses($people_status) ?></h6>
                                  </div>
                                </div>
                              </td>
                            <?php } ?>
                            <td>
                              <div class="d-flex px-2 py-1">

                                <?php
                                $ext = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
                                $type = ($ext === 'pdf') ? 'iframe' : 'image';


                                ?>

                                <a class="btn btn-block bg-gradient-primary mb-3" data-fancybox
                                  data-type="<?php echo $type; ?>" data-src="<?php echo $filepath ?>" href="javascript:;">
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
            <?php

            // Paginate the result
            $sql = "SELECT * FROM  guide_details WHERE booking_id = '$booking_id' ";
            $result = $conn->query($sql);

            // Fetch the data and build the output array
            if ($result->num_rows > 0) {
              $guide = $result->fetch_assoc();
              $guide_id = $guide['guide_id'];



              ?>


              <div class="button-row d-flex mt-4">


                <a class="btn btn-lg  bg-gradient-primary ms-auto mb-0 "
                  href="<?php echo $rootPath ?>/guide/<?php echo $guide_id ?>">Go To Guide</a>

              </div>

            <?php } ?>
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



</body>

</html>
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
            <div class="row mt-5">
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
            </div>
            <!--form panels-->



            <div class="row  ">
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
                            <h5 class="text-white font-weight-bolder mb-0 mt-3">
                              <?php echo $booking['status'] ?>
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
              <div class="col-lg-6 col-0 mt-4 mt-lg-0">
                <!-- <div class="card h-100">
                  <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Reviews</h6>
                  </div>
                  <div class="card-body pb-0 p-3">
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                        <div class="w-100">
                          <div class="d-flex mb-2">
                            <span class="me-2 text-sm font-weight-bold text-capitalize">Positive reviews</span>
                            <span class="ms-auto text-sm font-weight-bold">80%</span>
                          </div>
                          <div>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-gradient-info w-80" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="w-100">
                          <div class="d-flex mb-2">
                            <span class="me-2 text-sm font-weight-bold text-capitalize">Neutral reviews</span>
                            <span class="ms-auto text-sm font-weight-bold">17%</span>
                          </div>
                          <div>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-gradient-dark w-10" role="progressbar" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="w-100">
                          <div class="d-flex mb-2">
                            <span class="me-2 text-sm font-weight-bold text-capitalize">Negative reviews</span>
                            <span class="ms-auto text-sm font-weight-bold">3%</span>
                          </div>
                          <div>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-gradient-danger w-5" role="progressbar" aria-valuenow="5"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="card-footer pt-0 p-3 d-flex align-items-center">
                    <div class="w-60">
                      <p class="text-sm">
                        More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b>
                        projects were created.
                      </p>
                    </div>
                    <div class="w-40 text-end">
                      <a class="btn bg-gradient-dark mb-0 text-end" href="javascript:;">View all reviews</a>
                    </div>
                  </div>
                </div> -->
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
                        foreach ($booking_details as $detail) {

                          $name = $detail['name'];
                          $ic = $detail['ic'];
                          $phone = $detail['phone'];
                          $email = $detail['email'];
                          $address = $detail['address'];
                          $id = $detail['booking_id'];

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

                                <div class="d-flex flex-column justify-content-center">
                                  <button type="button" class="btn btn-block bg-gradient-primary mb-3"
                                    data-bs-toggle="modal" data-bs-target="#modal-<?php echo $id ?>">File</button>

                                </div>
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
        <!-- <form method="POST">

          <div class="button-row d-flex mt-4">
            <a class="btn bg-gradient-light mb-0 js-btn-prev"
              href="<?php echo $rootPath; ?>/book/insurance">Previous</a>
 

            <button type="submit" class="btn bg-gradient-dark ms-auto mb-0    " name="confirmbooking">Confirm</button>

          </div>

        </form> -->

      </div>
    </div>
    </div>
    </div>
    </div>

    <div>
      <?php

      // Assuming $booking_details is fetched from the database
      foreach ($booking_details as $index => $detail) {
        // Get the details for each booking
        $name = $detail['name'];
        $ic = $detail['ic'];
        $phone = $detail['phone'];
        $email = $detail['email'];
        $address = $detail['address'];
        $file = $detail['file'];
        $booking_id = $detail['booking_id'];

        // Generate the person folder (if it's ordered DESC, we need to keep track of the actual order)
        $personFolder = 'person_' . ($index + 1);  // person_1, person_2, etc.
      
        // Set the file path with the dynamic person folder
        $filePath = $basePath2 . '/assets/uploads/booking/insurance/' . $booking_id . '/' . $personFolder . '/' . $file;

        // Get the file extension and check if it's a valid format (e.g., PDF, image)
        $fileInfo = pathinfo($filePath);
        $extension = strtolower($fileInfo['extension']); // Get file extension and convert to lowercase
        ?>

        <!-- Modal for displaying the file -->
        <div class="modal fade" id="modal-<?php echo $booking_id ?>" tabindex="-1" role="dialog"
          aria-labelledby="modal-default" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">
                  <?php echo $name; ?>
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">

                <?php
                // Check if the file is an image or a PDF and display accordingly
                if ($extension == 'pdf') {
                  // Embed PDF
                  echo '<iframe src="' . $filePath . '" width="100%" height="400px" frameborder="0"></iframe>';
                } elseif (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'])) {
                  // Display Image
                  echo '<img src="' . $filePath . '" alt="Image" width="100%" height="auto">';
                } else {
                  echo "<p>Unsupported file type</p>";
                }
                ?>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn bg-gradient-primary">Save changes</button>
                <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>



    </div>


    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

    </div>
  </main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/togglenav.php"); ?>

  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>



</body>

</html>
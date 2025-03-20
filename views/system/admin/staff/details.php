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
                            <div class="col-12 mt-lg-0 mt-4">
                                <!-- Card Profile -->
                                <div class="card card-body" id="profile">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-sm-auto col-4">
                                            <!-- <div class="avatar avatar-xl position-relative">
                                                <img src="../../assets/img/team-3.jpg" alt="bruce"
                                                    class="w-100 border-radius-lg shadow-sm">
                                            </div> -->
                                        </div>
                                        <div class="col-sm-auto col-8 my-auto">
                                            <div class="h-100">
                                                <h5 class="mb-1 font-weight-bolder">
                                                    Mark Johnson
                                                </h5>
                                                <p class="mb-0 font-weight-bold text-sm">ADMIN
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">

                                        </div>
                                    </div>
                                </div>
                                <!-- Card Basic Info -->
                                <div class="card mt-4" id="basic-info">
                                    <div class="card-header">
                                        <h5>Basic Info</h5>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="form-label">Username</label>
                                                <div class="input-group">
                                                    <input id="firstName" name="firstName" class="form-control"
                                                        type="text" value="<?php echo $staff['username'] ?>" 
                                                        onfocus="focused(this)" onfocusout="defocused(this)" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Email</label>
                                                <div class="input-group">
                                                    <input id="lastName" name="lastName" class="form-control"
                                                        type="text" value="<?php echo $staff['email'] ?>" 
                                                        onfocus="focused(this)" onfocusout="defocused(this)" readonly>
                                                </div>
                                            </div>
                                        </div>
 
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="form-label mt-4">IC</label>
                                                <div class="input-group">
                                                    <input id="email" name="email" class="form-control" type="text" value="<?php echo $staff['ic'] ?>" 
                                                        placeholder="example@email.com" onfocus="focused(this)"
                                                        onfocusout="defocused(this)" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label mt-4">Passport</label>
                                                <div class="input-group">
                                                    <input id="confirmation" name="confirmation" class="form-control"
                                                        type="text" placeholder="example@email.com" value="<?php echo $staff['passport'] ?>" 
                                                        onfocus="focused(this)" onfocusout="defocused(this)" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                        <div class="col-lg-6 col-12">
                                        <label class="form-label mt-4">Phone Number</label>
                                                <div class="input-group">
                                                    <input id="phone" name="phone" class="form-control" type="tel" value="<?php echo $staff['phone'] ?>" 
                                                    onfocus="focused(this)"
                                                        onfocusout="defocused(this)" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <label class="form-label mt-4">Address</label>
                                                <div class="input-group">
                                                <textarea class="form-control" id="" rows="3" name="address" readonly><?php echo $staff['address'] ?></textarea>

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
        </div>
        </div>




        <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/togglenav.php"); ?>

    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>



</body>

</html>
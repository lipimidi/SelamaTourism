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

                                <!-- Card Basic Info -->
                                <div class="card mt-4" id="basic-info">
                                    <div class="card-header">
                                        <h5>Basic Info</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="form-label">Username</label>
                                                    <div class="input-group">
                                                        <input id="firstName" name="username" class="form-control"
                                                            type="text" required="required" onfocus="focused(this)"
                                                            onfocusout="defocused(this)">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label">Name</label>
                                                    <div class="input-group">
                                                        <input name="name" class="form-control" type="text"
                                                            placeholder="Thompson" onfocus="focused(this)"
                                                            onfocusout="defocused(this)">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="form-label mt-4">IC</label>
                                                    <div class="input-group">
                                                        <input id="email" name="ic" class="form-control" type="text"
                                                            placeholder="example@email.com" onfocus="focused(this)"
                                                            onfocusout="defocused(this)">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label mt-4">Passport</label>
                                                    <div class="input-group">
                                                        <input id="confirmation" name="passport" class="form-control"
                                                            type="text" placeholder="example@email.com"
                                                            onfocus="focused(this)" onfocusout="defocused(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-6">
                                                    <label class="form-label mt-4">Phone Number</label>
                                                    <div class="input-group">
                                                        <input id="phone" name="phone" class="form-control" type="phone"
                                                            onfocus="focused(this)" onfocusout="defocused(this)">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <label class="form-label mt-4">Email</label>
                                                    <div class="input-group">
                                                        <input name="email" class="form-control" type="email"
                                                            placeholder="Thompson" required="required"
                                                            onfocus="focused(this)" onfocusout="defocused(this)">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">

                                                <div class="col-lg-6 col-12">
                                                    <label class="form-label mt-4">Address</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" id="" rows="3"
                                                            name="address"></textarea>

                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-12">
                                                    <label class="form-label mt-4">Role</label>
                                                    <div class="choices" data-type="select-one" tabindex="0"
                                                        role="combobox" aria-autocomplete="list" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <div class="choices__inner">
                                                            <select class="form-control choices__input  text-center"
                                                                name="role">
                                                                <?php foreach ($role_details as $role_detail) { ?>
                                                                    <option value="<?php echo $role_detail['id'] ?>">
                                                                        <?php echo $role_detail['name'] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                    type="submit" name="createstaff">Create</button>
                                            </div>
                                        </div>
                                    </form>
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
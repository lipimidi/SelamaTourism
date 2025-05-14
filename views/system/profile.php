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
    <div class="min-height-300 bg-dark position-absolute w-100"></div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidenav.php"); ?>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar.php"); ?>

        <!-- End Navbar -->
        <div class="container-fluid py-4">


            <div class="row">
                <div class="col-lg-12 mt-lg-0 mt-4">
                    <!-- Card Profile -->
                    <div class="card card-body" id="profile">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-auto col-4">
                                <?php
                                // Path to the user image

                                $id = $_SESSION['user_details']['id'];
                                $filename = $user['image'];
 
                                // Default image if the user image does not exist
                                $defaultImage = 'https://demos.creative-tim.com/argon-dashboard-pro/assets/img/team-3.jpg';
                                ?>

                                <div class="avatar avatar-xl position-relative">
                                    <!-- Check if user image exists; if not, use default image -->
                                    <img src="<?php echo (file_exists($filename)) ? $filename : $defaultImage; ?>"
                                        alt="bruce" class="w-100 border-radius-lg shadow-sm">
                                </div>
                            </div>
                            <div class="col-sm-auto col-8 my-auto">
                                <div class="h-100">
                                    <h5 class="mb-1 font-weight-bolder">
                                        <?php echo $user['email'] ?>
                                    </h5>
                                    <p class="mb-0 font-weight-bold text-sm">
                                        <?php echo $user['role_name'] ?>

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
                            <!-- <h5>Basic Info</h5> -->
                        </div>
                        <div class="card-body pt-0">
                            <form method="POST" enctype="multipart/form-data">

                                <!-- Name Field -->
                                <div class="row">

                                    <input name="user_id" class="form-control" type="hidden"
                                        value="<?php echo $_SESSION['user_details']['id'] ?>">


                                    <div class="col-12">
                                        <label class="form-label">Name</label>
                                        <div class="input-group">
                                            <input id="name" name="name" class="form-control" type="text"
                                                placeholder="Name" required="required" onfocus="focused(this)"
                                                onfocusout="defocused(this)" value="<?php echo $user['name'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <!-- IC Field -->
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label mt-4">IC</label>
                                        <div class="input-group">
                                            <input id="ic" name="ic" class="form-control" type="text"
                                                placeholder="IC Number" onfocus="focused(this)"
                                                onfocusout="defocused(this)" value="<?php echo $user['ic'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Upload Field -->
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label mt-4">Image</label>
                                        <div class="input-group">
                                            <input id="image" name="image" class="form-control" type="file"
                                                accept="image/*" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                </div>

                                <!-- Passport Field -->
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label mt-4">Passport</label>
                                        <div class="input-group">
                                            <input id="passport" name="passport" class="form-control" type="text"
                                                placeholder="Passport Number" onfocus="focused(this)"
                                                onfocusout="defocused(this)" value="<?php echo $user['passport'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <!-- Phone Field -->
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label mt-4">Phone</label>
                                        <div class="input-group">
                                            <input id="phone" name="phone" class="form-control" type="tel"
                                                placeholder="Phone Number" onfocus="focused(this)"
                                                onfocusout="defocused(this)" value="<?php echo $user['phone'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <!-- Address Field -->
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label  mt-4">Address</label>
                                        <div class="input-group">
                                            <textarea id="address" name="address" class="form-control"
                                                placeholder="Address" rows="3" onfocus="focused(this)"
                                                onfocusout="defocused(this)"><?php echo $user['address'] ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="profile_update"
                                    class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Updated</button>

                            </form>
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
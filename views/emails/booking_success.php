
<?php extract($variables);
?>
<!DOCTYPE html>
<html lang="en">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php"); ?>

<?php 
var_dump($_SERVER['DOCUMENT_ROOT']);
var_dump($basePath2);
var_dump($rootPath);


$fullPath = $_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php";
if (!file_exists($fullPath)) {
    echo "File not found: $fullPath";
}
?>
<body class="g-sidenav-show   bg-gray-200">

    <!-- End Google Tag Manager (noscript) -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidenav2.php"); ?>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mt-5 text-white">Booking Confirmed!</h3>
                    <h5 class="text-white font-weight-normal"> Thank you for your booking,
                        <strong><?php echo $user_email ?></strong><br>
                        Your booking on <strong><?php echo $date ?></strong> at
                        <strong><?php echo $time ?></strong> is now confirmed
                    </h5>

                    <div class="multisteps-form mb-5">



                        <div class="row  mt-5">
                            <div class="  col-12 mx-auto">
                                <div class="row">



                                    <div class="col-md-4 col-12">
                                        <div class="card overflow-hidden shadow-lg">
                                            <div class="card-body p-3 position-relative">
                                                <div class="row">
                                                    <div class="col-8 text-start">
                                                        <div
                                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                            <i class="ni ni-calendar-grid-58  text-white text-lg opacity-10"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                        <h5 class="font-weight-bolder mb-0 mt-3">
                                                            <?php echo $date ?>
                                                        </h5>
                                                        <span class=" text-sm">Date</span>
                                                    </div>
                                                    <div class="col-4">

                                                        <!-- <p class="text-white text-sm text-end font-weight-bolder mt-6 mb-auto">+55%</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4 col-12">
                                        <div class="card overflow-hidden shadow-lg">
                                            <div class="card-body p-3 position-relative">
                                                <div class="row">
                                                    <div class="col-8 text-start">
                                                        <div
                                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                            <i class="ni ni-watch-time  text-white text-lg opacity-10"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                        <h5 class="font-weight-bolder mb-0 mt-3">
                                                            <?php echo $time ?>
                                                        </h5>
                                                        <span class=" text-sm">Time</span>
                                                    </div>
                                                    <div class="col-4">

                                                        <!-- <p class="text-white text-sm text-end font-weight-bolder mt-6 mb-auto">+55%</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4 col-12">
                                        <div class="card overflow-hidden shadow-lg">
                                            <div class="card-body p-3 position-relative">
                                                <div class="row">
                                                    <div class="col-8 text-start">
                                                        <div
                                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                            <i class="ni ni-circle-08  text-white text-lg opacity-10"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                        <h5 class="font-weight-bolder mb-0 mt-3">
                                                            <?php echo $people ?>
                                                        </h5>
                                                        <span class=" text-sm">People</span>
                                                    </div>
                                                    <div class="col-4">

                                                        <!-- <p class="text-white text-sm text-end font-weight-bolder mt-6 mb-auto">+55%</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="row">



                                    <div class=" mt-4 col-8 mx-auto">
                                        <a class="btn btn-lg bg-gradient-primary w-100" href="<?php echo $rootPath ?>/booking/<?php echo $id ?>">Booking Details</a>
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
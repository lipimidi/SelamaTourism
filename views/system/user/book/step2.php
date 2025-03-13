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


<body class="g-sidenav-show   bg-gray-100">

  <!-- End Google Tag Manager (noscript) -->
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
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
                  <button class="multisteps-form__progress-btn   js-active " type="button" title="User Info">
                    <span>Date</span>
                  </button>
                  <button class="multisteps-form__progress-btn  js-active" type="button" title="Address">
                    <span>People</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                    <span>Insurance</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                    <span>Finish</span>
                  </button>
                </div>
              </div>
            </div>
            <!--form panels-->
            <div class="row  ">
              <div class="col-12  ">
                <form class="multisteps-form__form" method="POST">
                  <!--single form panel-->
                  <div class="card  p-3 border-radius-xl bg-white    " data-animation="FadeIn">
                    <div class="row text-center">
                      <div class="col-10 mx-auto">
                        <h5 class="font-weight-normal">People Information</h5>
                        <p>Let us know your name and email address. Use an address you don't mind other users contacting
                          you at</p>
                      </div>
                    </div>
                    <?php
                    $count = $_SESSION['booking']['people_count'];
                    for ($i = 1; $i <= $count; $i++) {

                      ?>
                      <div class="multisteps-form__content">
                        <div id="form-container">
                          <div class="row mt-3 form-group">
                            <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                              <label>Name</label>
                              <input class="  form-control mb-3" type="text" placeholder="Eg. Michael"
                                name="name-<?php echo $i ?>" 
                                value="<?php echo isset($_SESSION['booking']['people'][$i]['name']) ? $_SESSION['booking']['people'][$i]['name'] : ''; ?>"
                                >
                              <label>Identity Card Number</label>
                              <input class=" form-control mb-3" type="text" placeholder="Eg. Tomson"
                                name="ic-<?php echo $i ?>"
                                value="<?php echo isset($_SESSION['booking']['people'][$i]['ic']) ? $_SESSION['booking']['people'][$i]['ic'] : ''; ?>"
                                >
                              <label>Phone</label>
                              <input class="  form-control" type="text" placeholder="011 23141414"
                                name="phone-<?php echo $i ?>"
                                value="<?php echo isset($_SESSION['booking']['people'][$i]['phone']) ? $_SESSION['booking']['people'][$i]['phone'] : ''; ?>"
                                >
                              <label>Email Address</label>
                              <input class="  form-control" type="text" placeholder="Eg. soft@dashboard.com"
                                name="email-<?php echo $i ?>"
                                value="<?php echo isset($_SESSION['booking']['people'][$i]['email']) ? $_SESSION['booking']['people'][$i]['email'] : ''; ?>"
                                >
                              <label>Home Address</label>
                              <input class=" form-control" type="text" placeholder="Eg. soft@dashboard.com"
                                name="address-<?php echo $i ?>"
                                value="<?php echo isset($_SESSION['booking']['people'][$i]['address']) ? $_SESSION['booking']['people'][$i]['address'] : ''; ?>"
                                >
                            </div>
                          </div>
                        </div>
                        <!-- 
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next"
                          onclick="addForm()">Add</button>
                      </div> -->
                      </div>

                    <?php } ?>
                    <div class="button-row d-flex mt-4">
                      <button type="submit" class="btn bg-gradient-dark ms-auto mb-0  "
                        name="confirmpeople">Save</button>


                    </div>
                    <div class="button-row d-flex mt-4">
                      <a class="btn bg-gradient-light mb-0 js-btn-prev"
                        href="<?php echo $rootPath; ?>/book">Previous</a>
                      <a class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                        href="<?php echo $rootPath; ?>/book/insurance">Next</a>
                    </div>
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
  <!-- <script>
    function addForm() {
      // Get the form container
      const formContainer = document.getElementById('form-container');

      // Clone the entire form row
      const newForm = formContainer.querySelector('.form-group').cloneNode(true);

      // Optionally, reset values of inputs in the new form
      const inputs = newForm.querySelectorAll('input');
      inputs.forEach(input => {
        input.value = ''; // Clear input values
      });

      // Append the cloned form to the form container
      formContainer.appendChild(newForm);
    }
  </script> -->
</body>

</html>
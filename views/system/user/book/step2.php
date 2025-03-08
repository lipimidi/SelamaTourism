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
          <h3 class="mt-5 text-white">Secure your spot and get ready for an unforgettable experience</h3>
          <h5 class="text-white font-weight-normal">You can customize this depending on the event or service you're
            offering! If you give me more context, I can tailor it even further.</h5>
          <div class="multisteps-form mb-5">
            <!--progress bar-->
            <div class="row mt-5">
              <div class="col-12 col-lg-8 mx-auto my-5">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                    <span>Date</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Address">
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
            <div class="row mb-lg-7">
              <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form">
                  <!--single form panel-->
                  <div class="card  p-3 border-radius-xl bg-white    " data-animation="FadeIn">
                    <div class="row text-center">
                      <div class="col-10 mx-auto">
                        <h5 class="font-weight-normal">People Information</h5>
                        <p>Let us know your name and email address. Use an address you don't mind other users contacting
                          you at</p>
                      </div>
                    </div>
                    <div class="multisteps-form__content">
                      <div id="form-container">
                        <div class="row mt-3 form-group">
                          <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                            <label>Name</label>
                            <input class="multisteps-form__input form-control mb-3" type="text"
                              placeholder="Eg. Michael" onfocus="focused(this)" onfocusout="defocused(this)">
                            <label>Identity Card Number</label>
                            <input class="multisteps-form__input form-control mb-3" type="text" placeholder="Eg. Tomson"
                              onfocus="focused(this)" onfocusout="defocused(this)">
                            <label>Phone</label>
                            <input class="multisteps-form__input form-control" type="tel" placeholder="011 23141414"
                              onfocus="focused(this)" onfocusout="defocused(this)">
                            <label>Email Address</label>
                            <input class="multisteps-form__input form-control" type="email"
                              placeholder="Eg. soft@dashboard.com" onfocus="focused(this)" onfocusout="defocused(this)">
                            <label>Home Address</label>
                            <input class="multisteps-form__input form-control" type="email"
                              placeholder="Eg. soft@dashboard.com" onfocus="focused(this)" onfocusout="defocused(this)">
                          </div>
                        </div>
                      </div>

                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next"
                          onclick="addForm()">Add</button>
                      </div>
                    </div>

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
  <script>
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
  </script>
</body>

</html>
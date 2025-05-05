<!--
=========================================================
* Soft UI Design System PRO - v1.1.0
=========================================================

* Product Page:  https://themes.getbootstrap.com/product/soft-ui-design-system-pro/ 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/head.php"); ?>

<body class="presentation-page">
  <!-- Navbar -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/nav.php"); ?>


  <header>
    <div class="page-header min-vh-85">
      <div>
        <img class="position-absolute fixed-top ms-auto w-100 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src="<?php echo $rootPath; ?>/assets/img/curved-images/test.png" alt="image">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="text-center">
                <h3 class="text-gradient text-primary">Contact us</h3>
                <p class="mb-0">
                  For further questions, including partnership opportunities, please email hello@creative-tim.com
                  or contact using our contact form.
                </p>
              </div>
              <form id="contact-form" method="post" autocomplete="off">
                <div class="card-body pb-2">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Full Name</label>
                      <div class="input-group mb-4">
                        <input class="form-control" placeholder="Full Name" aria-label="Full Name" type="text">
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-2">
                      <label>Email</label>
                      <div class="input-group">
                        <input type="email" class="form-control" placeholder="hello@creative-tim.com">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <label>How can we help you?</label>
                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Describe your problem in at least 250 characters"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary mt-3 mb-0">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

 

  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/footer.php"); ?>

  <!--   Core JS Files   -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/script.php"); ?>

 
</body>

</html>
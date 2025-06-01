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
    <div class="page-header min-vh-55" style="background-position-y: 50%;">
      <div
        class="position-absolute border-radius-lg border-top-start-radius-0 border-top-end-radius-0 border-bottom-end-radius-0 fixed-top ms-auto w-80 h-100 z-index-0 d-none d-sm-none d-md-block"
        style="background-image: url('<?php echo  $picture ?>'); background-size:cover;">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card card-body blur d-flex justify-content-center px-5 shadow-lg mt-lg-5 mt-3 py-5">
              <!-- <h1 class="text-gradient text-primary mb-0">Title</h1>
              <h1 class="mb-4">Subtitle</h1> -->

              <div id="title">

              </div>
              <!-- <p class="lead pe-sm-5 me-sm-5">The time is now for it be okay to be great. People in this world shun people for being nice. </p> -->
              <!-- <h5 class="mt-3">Connect with us on</h5> -->
              <!-- <div class="d-flex justify-content-start">
                <a href="javascript:;"><i class="fab fa-facebook text-dark me-4 text-lg" aria-hidden="true"></i></a>
                <a href="javascript:;"><i class="fab fa-instagram text-dark me-4 text-lg" aria-hidden="true"></i></a>
                <a href="javascript:;"><i class="fab fa-twitter text-dark me-4 text-lg" aria-hidden="true"></i></a>
                <a href="javascript:;"><i class="fab fa-google-plus text-dark text-lg" aria-hidden="true"></i></a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <section class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ms-auto me-auto" id="content">
          <!-- <h6 class="opacity-7 text-uppercase font-weight-bolder text-sm">The Idea</h6> -->
          <!-- <h3 class="title mb-4">Create a design system that can be used in any product available</h3>
          <p class="text-dark">
            This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if
            you want the user to see more. We are here to make life better.
            <br> <br>
            And now I look and look around and there’s so many Kanyes I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.
            <br> <br>
            The way to survive in modern society is to be an ascetic. It is to retreat from society. There’s too much society everywhere you go…The only solution is turn it off.
          </p> -->
        </div>
      </div>

    </div>


  </section>


  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/footer.php"); ?>

  <!--   Core JS Files   -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/script.php"); ?>

  <script>

    function decodeHtmlEntities(encodedString) {
      var textarea = document.createElement('textarea');
      textarea.innerHTML = encodedString;
      return textarea.value;
    }
    var titleFromPHP = <?php echo json_encode($title); ?>;
    var contentFromPHP = <?php echo json_encode($content); ?>;

    // console.log(titleFromPHP);
    // console.log(contentFromPHP);

    var decodedTitle = decodeHtmlEntities(titleFromPHP);
    var decodedContent = decodeHtmlEntities(contentFromPHP);

    // Now set the innerHTML with the decoded HTML
    document.getElementById("title").innerHTML = decodedTitle;
    document.getElementById("content").innerHTML = decodedContent;
  </script>

</body>

</html>
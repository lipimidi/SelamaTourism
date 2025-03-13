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
                  <button class="multisteps-form__progress-btn   js-active" type="button" title="User Info">
                    <span>Date</span>
                  </button>
                  <button class="multisteps-form__progress-btn   js-active" type="button" title="Address">
                    <span>People</span>
                  </button>
                  <button class="multisteps-form__progress-btn  js-active" type="button" title="Order Info">
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
                <form class="multisteps-form__form" enctype="multipart/form-data" method="POST">
                  <!--single form panel-->
                  <div class="card p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <div class="row text-center">
                      <div class="col-10 mx-auto">
                        <h5 class="font-weight-normal">What are you doing? (checkboxes)</h5>
                        <p>Give us more details about you. What do you enjoy doing in your spare time?</p>
                      </div>
                    </div>
                    <div class="multisteps-form__content">
                      <div class="row mt-4">
                        <div class="col-sm-3 ms-auto">
                          <input type="checkbox" class="btn-check" id="btncheck1">
                          <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck1">
                            <svg class="text-dark" width="20px" height="20px" viewBox="0 0 40 40"
                              xmlns="http://www.w3.org/2000/svg">
                              <title>settings</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(304.000000, 151.000000)">
                                      <polygon class="color-background" opacity="0.596981957"
                                        points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                      </polygon>
                                      <path class="color-background"
                                        d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                        opacity="0.596981957"></path>
                                      <path class="color-background"
                                        d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                      </path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </label>
                          <h6>Design</h6>
                        </div>
                        <div class="col-sm-3">
                          <input type="checkbox" class="btn-check" id="btncheck2">
                          <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck2">
                            <svg class="text-dark" width="20px" height="20px" viewBox="0 0 42 42"
                              xmlns="http://www.w3.org/2000/svg">
                              <title>box-3d-50</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(603.000000, 0.000000)">
                                      <path class="color-background"
                                        d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                      </path>
                                      <path class="color-background"
                                        d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                        opacity="0.7"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </label>
                          <h6>Code</h6>
                        </div>
                        <div class="col-sm-3 me-auto">
                          <input type="checkbox" class="btn-check" id="btncheck3">
                          <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck3">
                            <svg class="text-dark" width="20px" height="20px" viewBox="0 0 40 40"
                              xmlns="http://www.w3.org/2000/svg">
                              <title>spaceship</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(4.000000, 301.000000)">
                                      <path class="color-background"
                                        d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                      </path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </label>
                          <h6>Technology</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  $count = $_SESSION['booking']['people_count'];
                  for ($i = 1; $i <= $count; $i++) {
                    ?>
                    <!-- Dropzone -->
                    <div class="dropzone" id="dropzoneArea-<?php echo $i ?>"></div>
                  <?php } ?>

                  <!-- Submit Button -->
                  <!-- <div class="row">
                    <div class="col-6 mx-auto">
                      <button type="submit" class="btn btn-primary w-100">Next</button>
                    </div>
                  </div> -->

              </div>

            </div>
          </div>
          <div class="button-row d-flex mt-4">
            <a class="btn bg-gradient-light mb-0 js-btn-prev" href="<?php echo $rootPath; ?>/book/people">Previous</a>
            <a class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
              href="<?php echo $rootPath; ?>/book/summary">Next</a>
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
  // Disable Dropzone auto discovery to prevent conflicts
  Dropzone.autoDiscover = false;

  document.addEventListener("DOMContentLoaded", function () {
    // Loop through each dynamically created dropzone
    <?php for ($i = 1; $i <= $count; $i++) { ?>
      // Manually initialize Dropzone for each element
      new Dropzone("#dropzoneArea-<?php echo $i; ?>", {
        url: '/upload',  // Ensure you replace with a valid URL for the upload
        paramName: 'file',  // The name used to send the file
        maxFilesize: 2,  // Max file size in MB
        acceptedFiles: '.jpg,.jpeg,.png,.gif,.pdf',  // Allowed file types
        dictDefaultMessage: 'Drag and drop files here or click to upload',
        addRemoveLinks: true,  // Allow file removal
        previewsContainer: "#dropzoneArea-<?php echo $i; ?>",  // Where to display the previews

        init: function() {
          // Example of setting up a custom callback for added file
          this.on("addedfile", function(file) {
            if (file.type.startsWith('image/')) {
              var reader = new FileReader();
              reader.onload = function(e) {
                var imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                file.previewElement.appendChild(imgElement);  // Add the image preview to the preview container
              };
              reader.readAsDataURL(file);
            }
          });
        },

        success: function(file, response) {
          console.log("File uploaded:", file);
        },
        error: function(file, response) {
          console.log("Error uploading file:", file);
        }
      });
    <?php } ?>
  });
</script>
</body>

</html>
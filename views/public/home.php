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


  <header class="header-2">
    <div class="page-header min-vh-75 relative"
      style="background-image: url('<?php echo $rootPath; ?>/assets/img/lataputeh.jpg')">
      <span class=" mask  bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Lata Puteh</h1>
            <p class="lead text-white mt-3">Discover the Hidden Gem of Nature </p>
            <div class="buttons">
              <a href="<?php echo $basePath2; ?>/book" class="btn bg-gradient-primary mt-4">Explore Now</a>
              <!-- <button type="button" class="btn text-primary shadow-none mt-4">Read more</button> -->
            </div>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
          </g>
        </svg>
      </div>
    </div>
  </header>
  <!-- <section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"><span id="state1" countTo="300">0</span>+</h1>
                <h5 class="mt-3">Coded Elements</h5>
                <p class="text-sm">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"> <span id="state2" countTo="100">0</span>+</h1>
                <h5 class="mt-3">Design Blocks</h5>
                <p class="text-sm">Mix the sections, change the colors and unleash your creativity</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary" id="state3" countTo="39">0</h1>
                <h5 class="mt-3">Pages</h5>
                <p class="text-sm">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->



  <section class="pt-7 pb-0">

    <div class="container">
      <div class="row">
        <div class="row justify-content-center text-center my-sm-5">
          <div class="col-lg-6">
            <h2 class="text-dark mb-0">About</h2>
            <h2 class="text-primary text-gradient">Lata Puteh</h2>
            <!-- <p class="lead">We have created multiple options for you to put together and customise into pixel perfect pages. </p> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 mb-md-0 mb-4">
          <h3 class="text-gradient text-primary mb-2">Location</h3>
          <!-- <h3>500+ offices</h3> -->
          <!-- <p class="mb-4">
            Technology is applied science. Science is the study of nature. Mathematics is the language of nature. Philosophy is the root of mathematics. All tightly interrelated.
          </p> -->

          <p class="font-weight-bold">
            Lata Puteh is a scenic waterfall located in Batu Kurau, Perak, Malaysia. It is situated along the A6 road
            between Selama and Lenggong, approximately 32 kilometers from Batu Kurau . The waterfall is nestled within
            the tropical rainforest of the Bintang Range, offering a serene and natural setting .
          </p>
          <!-- <a href="javascript:;" class="text-info icon-move-right">Learn More
            <i class="fas fa-arrow-right text-sm ps-1"></i>
          </a> -->
        </div>
        <div class="col-md-6">
          <div class="card p-0 rounded-3">
            <div class="map-wrapper">
              <div class="ratio ratio-4x3">
                <!-- Embed Google Map -->
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119856.47270657779!2d102.30529069674792!3d4.581424478890174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c91d487ca9fd01%3A0x484fe93b99b799b9!2sLata%20Puteh!5e0!3m2!1sen!2smy!4v1632983645082!5m2!1sen!2smy"
                  allowfullscreen="" loading="lazy">
                </iframe>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>



    <div class="container py-5">
      <div class="row align-items-center">

        <div class="col-md-6 mb-md-0 mb-4">
          <div class="card p-0 rounded-3">
            <div class="blur-shadow-image">
              <img src="<?php echo $rootPath ?>/assets/img/home.jpg" alt="img-blur-shadow"
                class="img-fluid shadow rounded-3">
            </div>
            <div class="colored-shadow" style="background-image: url('<?php echo $rootPath ?>/assets/img/home.jpg');">
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-md-0 mb-4">
          <h3 class="text-gradient text-primary mb-2">History</h3>


          <p class="font-weight-bold">
            Lata Puteh is a figure from Malay folklore, known for her exceptional beauty and tragic love story. Her
            name, meaning "white," symbolizes purity and unattainable beauty. The legend often centers on her being
            loved by many but separated from her true love, embodying themes of sorrow and longing. Her story has had a
            lasting cultural impact, inspiring art, songs, and poetry across Southeast Asia.
          </p>
          <!-- <a href="javascript:;" class="text-info icon-move-right">Learn More
            <i class="fas fa-arrow-right text-sm ps-1"></i>
          </a> -->
        </div>

      </div>
    </div>


    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 mb-md-0 mb-4    order-2 order-md-1">
          <h3 class="text-gradient text-primary mb-2">Best Time To Visit</h3>
          <!-- <h3>500+ offices</h3> -->
          <!-- <p class="mb-4">
            Technology is applied science. Science is the study of nature. Mathematics is the language of nature. Philosophy is the root of mathematics. All tightly interrelated.
          </p> -->


          <p class="font-weight-bold">
            The best time to visit Lata Puteh is during the dry season, which typically runs from March to September.
            During this period, the weather is less rainy, making the trail to the waterfall easier to navigate and the
            waterfall itself more accessible. The monsoon season, from October to February, can make the trails slippery
            and increase the water flow, so it's best to avoid visiting during this time for safety reasons.
          </p>
          <!-- <a href="javascript:;" class="text-info icon-move-right">Learn More
            <i class="fas fa-arrow-right text-sm ps-1"></i>
          </a> -->
        </div>
        <div class="col-md-6    mb-md-0 mb-4  order-1 order-md-2">
          <div class="card p-0 rounded-3">
            <div class="blur-shadow-image">
              <img src="<?php echo $rootPath ?>/assets/img/home.jpg" alt="img-blur-shadow"
                class="img-fluid shadow rounded-3">
            </div>
            <div class="colored-shadow" style="background-image: url(<?php echo $rootPath ?>/assets/img/home.jpg);">
            </div>
          </div>
        </div>
      </div>
    </div>




  </section>

  <section class=" py-5 ">

    <div class="container">
      <div class="row ">
        <div class="row justify-content-center text-center my-sm-5">
          <div class="col-lg-6">
            <h2 class="text-dark mb-0">Why Visit</h2>
            <h2 class="text-primary text-gradient">Lata Puteh</h2>
            <!-- <p class="lead">We have created multiple options for you to put together and customise into pixel perfect pages. </p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6  mb-lg-0 mb-4  ">
          <div class="card card-background move-on-hover shadow-lg   h-100">

            <a href="javascript:;">
              <div class="full-background "
                style="background-image: url('<?php echo $rootPath ?>/assets/img/home2.jpg')">
              </div>

              <div class="card-body pt-12">
                <h4 class="text-white">Breathtaking Waterfalls and Greenery</h4>
                <p>Experience breathtaking waterfalls and vibrant nature at Lata Puteh, perfect for nature lovers.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6   mb-lg-0 mb-4 ">
          <div class="card card-background move-on-hover shadow-lg  h-100">

            <a href="javascript:;">
              <div class="full-background "
                style="background-image: url('<?php echo $rootPath ?>/assets/img/home.jpg')">
              </div>

              <div class="card-body pt-12">
                <h4 class="text-white">Hiking and Outdoor Fun</h4>
                <p>Explore exciting trails and hidden gems, offering the perfect adventure for all levels.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6  mb-lg-0 mb-4  mx-auto">
          <div class="card card-background move-on-hover shadow-lg  h-100">

            <a href="javascript:;">
              <div class="full-background "
                style="background-image: url('<?php echo $rootPath ?>/assets/img/login.jpg')">
              </div>

              <div class="card-body pt-12">
                <h4 class="text-white">Peaceful Retreat in Nature</h4>
                <p>Unwind in a serene, secluded spot away from the noise—perfect for relaxation and quiet moments.</p>
              </div>
            </a>
          </div>
        </div>




      </div>
    </div>
  </section>


  <!-- START Testimonials w/ 3 cards & dark background -->
  <section class="py-5 bg-gradient-primary position-relative overflow-hidden">
    <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
      <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-down</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-down">
              <path
                d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z"
                id="Path-Copy-2"
                transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) ">
              </path>
            </g>
          </g>
        </g>
      </svg>
    </div>

    <div class="container pt-6 pb-5 position-relative z-index-3">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <span class="badge badge-white text-dark mb-2">Hear from our happy customers!</span>
          <h2 class="text-white mb-3">Some thoughts from our customers</h2>

        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-4 mb-md-0 mb-7">
          <div class="card shadow-lg">

            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Sarah T., Nature Enthusiast</h4>
              <!-- <p>@oliviaharper</p> -->
              <p class="mt-2">
                Lata Puteh is a hidden gem! The beauty of the waterfalls and the surrounding greenery took my breath
                away. It’s the perfect place to escape and reconnect with nature.
              </p>
            </div>
            <div class="card-footer text-center pt-2">
              <div class="mx-auto">
                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>quote-down</title>
                  <g id="quote-down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path
                      d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                      id="quote-up" fill="#48484A" fill-rule="nonzero"
                      transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                    </path>
                  </g>
                </svg>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4 mb-md-0 mb-7">
          <div class="card shadow-lg">

            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Daniel M., Hiking Aficionado</h4>
              <!-- <p>@oliviaharper</p> -->
              <p class="mt-2">
                The hike to the waterfall was challenging yet rewarding. The trails are well-marked, and the views are
                incredible. I’ll definitely be coming back for more outdoor adventures!
              </p>
            </div>
            <div class="card-footer text-center pt-2">
              <div class="mx-auto">
                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>quote-down</title>
                  <g id="quote-down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path
                      d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                      id="quote-up" fill="#48484A" fill-rule="nonzero"
                      transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                    </path>
                  </g>
                </svg>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-4 mb-md-0 mb-7">
          <div class="card shadow-lg">

            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Emily R., Wellness Seeker</h4>
              <!-- <p>@oliviaharper</p> -->
              <p class="mt-2">
                I came here for some peace and quiet, and Lata Puteh delivered. The calm atmosphere, gentle sounds of
                the water, and fresh air were exactly what I needed to recharge.
              </p>
            </div>
            <div class="card-footer text-center pt-2">
              <div class="mx-auto">
                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>quote-down</title>
                  <g id="quote-down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path
                      d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                      id="quote-up" fill="#48484A" fill-rule="nonzero"
                      transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                    </path>
                  </g>
                </svg>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="position-absolute w-100 bottom-0">
      <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-up</title>
        <g stroke="none" stroke-width="0" fill="none" fill-rule="evenodd">
          <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-up" transform="translate(0.000000, 0.000000)">
              <path
                d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z">
              </path>
            </g>
          </g>
        </g>
      </svg>
    </div>
  </section>

  <section class="mt-lg-10 pb-4 bg-gray-900 m-3 border-radius-xl">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 my-auto">
          <h2 class="text-white mb-0 mt-6">Plan Your</h2>
          <h2 class="text-gradient text-primary mb-4  ">Dream Vacation</h2>
          <p class="text-white opacity-8">Explore amazing destinations and let us help you make your dream vacation a
            reality.</p>
          <div class="buttons">
            <a href="<?php echo $basePath2; ?>/book" class="btn bg-gradient-primary mt-4">Visit
              Now</a>
            <!-- <a href="pages/sign-up/sign-up-basic.html" target="_blank" class="btn text-white shadow-none mt-4">View
              Signup Pages</a> -->
          </div>
        </div>
        <div class="col-lg-8 ps-5 pe-0">
          <div class="row mt-lg-n7">
            <div class="col-lg-4 col-6 mt-5">
              <div class="card move-on-hover">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta1.webp" alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta2.webp" alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4 ">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta3.webp" alt="">
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="card move-on-hover">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta4.webp" alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta5.webp" alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta1.webp" alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta4.webp" alt="">
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6 mt-5 d-lg-block d-none">
              <div class="card move-on-hover">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta2.webp" alt="">
                </a>
              </div>
              <div class="card move-on-hover  mt-4">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta3.webp" alt="">
                </a>
              </div>
              <div class="card move-on-hover   mt-4">
                <a href="#">
                  <img class="w-100 border-radius-xl" src="<?php echo $rootPath; ?>/assets/img/cta/cta5.webp" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/footer.php"); ?>

  <!--   Core JS Files   -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/script.php"); ?>


  <script>
  </script>
  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>
</body>

</html>
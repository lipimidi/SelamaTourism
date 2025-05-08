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

  <!-- 
  <header class="header-2 pt-7">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url(https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/mark.jpg);">
          <span class="mask bg-gradient-dark"></span>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Pricing Plans</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Work with the rockets</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
              </div>
            </div>
          </div>
        </div>
 
      </div>
 
    </div>
    <div class="min-vh-75 position-absolute w-100 top-0">
 
    </div>
  </div>
</header> -->


  <section class="pt-7 pb-0">

    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <!-- START Blogs w/ 3 rows w/ image on left & title, text, author on end-->
          <section class="py-5">
            <?php

            // Return the paginated posts
            while ($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $row['title'] = html_entity_decode($row['title']);
              $row['title'] = trim($plainText = strip_tags($row['title']));
              $row['content'] = html_entity_decode($row['content']);
              $row['content'] = trim($plainText = strip_tags($row['content']));
              $row['content'] = substr($row['content'], 0, 150);
              $filename = $row['main_pic'];
              $picture = "$rootPath/assets/uploads/blogs/$id/$filename";
              ?>

              <div class="card card-plain card-blog mt-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4">
                    <div class="card-image position-relative border-radius-lg">
                      <div class="blur-shadow-image">
                        <img class="img border-radius-lg" src="<?php echo $picture ?>">
                      </div>
                      <div class="colored-shadow" style="background-image: url(<?php echo $picture ?>);">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 my-sm-auto mt-3 ms-sm-3">
                    <h4>
                      <a href="javascript:;" class="text-dark"><?php echo $row['title'] ?></a>
                    </h4>
                    <p><?php echo $row['content'] ?></p>
                    <div class=" ">
                    <a class="btn btn-primary " href="<?php echo $rootPath ?>/blog/<?php echo $id ?>">More Details</a>
                     </div>
                  </div>
                </div>
              </div>


            <?php }

            ?>



          </section>
          <ul class="pagination pagination-primary mt-4 ml-2">

            <?php
            for ($i = 1; $i <= $totalPages; $i++) {

              $activeClass = ($i == $page) ? 'active' : '';

              ?>



              <li class="page-item <?php echo $activeClass ?>">
                <a class="page-link " href="<?php $rootPath ?>/blog/list/<?php $i ?>"><?php echo $i ?></a>
              </li>



            <?php }

            ?>
          </ul>



        </div>
        <!-- <div class="col-lg-4 ml-auto">
        <div class="pt-1 pb-5 position-sticky top-1 mt-lg-8 mt-5">
         
           
          <h4 class="mt-5">Top Post</h4>
          <div class="card card-plain card-blog mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="card-image position-relative border-radius-lg">
                  <div class="blur-shadow-image">
                    <img class="img border-radius-lg" src="../../assets/img/curved-images/curved11.jpg" alt="curved11">
                  </div>
                <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/curved-images/curved11.jpg&quot;);"></div></div>
              </div>
              <div class="col-lg-8 col-md-8 my-sm-auto mt-3">
                <h5>
                  <a href="javascript:;" class="text-dark font-weight-normal">MateLabs mixes machine learning</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="card card-plain card-blog mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="card-image position-relative border-radius-lg">
                  <div class="blur-shadow-image">
                    <img class="img border-radius-lg" src="../../assets/img/curved-images/curved9.jpg" alt="curved9">
                  </div>
                <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/curved-images/curved9.jpg&quot;);"></div></div>
              </div>
              <div class="col-lg-8 col-md-8 my-sm-auto mt-3">
                <h5>
                  <a href="javascript:;" class="text-dark font-weight-normal">Mixes machine learning</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="card card-plain card-blog mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="card-image position-relative border-radius-lg">
                  <div class="blur-shadow-image">
                    <img class="img border-radius-lg" src="../../assets/img/curved-images/curved8.jpg" alt="curved8">
                  </div>
                <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/curved-images/curved8.jpg&quot;);"></div></div>
              </div>
              <div class="col-lg-8 col-md-8 my-sm-auto mt-3">
                <h5>
                  <a href="javascript:;" class="text-dark font-weight-normal">MateLabs mixes machine learning</a>
                </h5>
              </div>
            </div>
          </div>
          <h4 class="mt-5 mb-4">Tags</h4>
          <span class="badge bg-light text-dark">Support</span>
          <span class="badge bg-light text-dark">Business</span>
          <span class="badge bg-light text-dark">Analytics</span>
          <span class="badge bg-light text-dark">Tutorials</span>
          <span class="badge bg-light text-dark mt-2">Sponsorships</span>
        </div>
      </div> -->
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
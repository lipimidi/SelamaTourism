<div class="min-height-300 bg-gradient-primary position-absolute w-100"></div>

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4  shadow-lg"
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4  shadow-lg"
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="ni ni-shop p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="<?php echo $rootPath; ?>/dashboard">
      <!-- <img src="../../assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo"> -->
      <span class="ms-1 font-weight-bold">Selama Tourism</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#dashboardsExamples" class="nav-link" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-shop text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboards</span>
          </a>
          <div class="collapse  show " id="dashboardsExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " href="landing.html">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal"> Landing </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="default.html">
                  <span class="sidenav-mini-icon"> D </span>
                  <span class="sidenav-normal"> Default </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="automotive.html">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal"> Automotive </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="smart-home.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Smart Home </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="crm.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> CRM </span>
                </a>
              </li>
            </ul>
          </div>
        </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $rootPath; ?>/dashboard">
          <div class="icon icon-shape icon-sm text-center   d-flex align-items-center justify-content-center">
               <i class="fa-solid fa-house  text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <?php if ($role != 'guide') { ?>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#booking" class="nav-link " aria-controls="booking" role="button"
            aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
               <i class="fa-solid fa-calendar-check  text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Booking</span>
          </a>
          <div class="collapse " id="booking">
            <ul class="nav ms-4">

              <?php if ($role == 'user') { ?>
                <li class="nav-item ">
                  <a class="nav-link " href="<?php echo $rootPath; ?>/book">
                    <span class="sidenav-mini-icon"> B </span>
                    <span class="sidenav-normal"> Book </span>
                  </a>
                </li>
              <?php } ?>

              <li class="nav-item ">
                <a class="nav-link " href="<?php echo $rootPath; ?>/book/list">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal"> List </span>
                </a>
              </li>

              <?php if ($role == 'admin') { ?>
                <li class="nav-item ">
                  <a class="nav-link " href="<?php echo $rootPath; ?>/book/settings">
                    <span class="sidenav-mini-icon"> S </span>
                    <span class="sidenav-normal"> Settings </span>
                  </a>
                </li>
              <?php } ?>

            </ul>
          </div>
        </li>
      <?php } ?>


      <?php if ($role == 'admin') { ?>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#staff" class="nav-link " aria-controls="staff" role="button"
            aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-users  text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Staff</span>
          </a>
          <div class="collapse " id="staff">
            <ul class="nav ms-4">


              <li class="nav-item ">
                <a class="nav-link " href="<?php echo $rootPath; ?>/staff/list">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal"> List </span>
                </a>
              </li>




              <li class="nav-item ">
                <a class="nav-link " href="<?php echo $rootPath; ?>/staff/addnew">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal"> Add New </span>
                </a>
              </li>


            </ul>
          </div>
        </li>




        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#blog" class="nav-link " aria-controls="blog" role="button"
            aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-blog text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Blogs</span>
          </a>
          <div class="collapse " id="blog">
            <ul class="nav ms-4">

            <li class="nav-item ">
                <a class="nav-link " href="<?php echo $rootPath; ?>/blogs/addnew">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal"> Add New </span>
                </a>
              </li>


              <li class="nav-item ">
                <a class="nav-link " href="<?php echo $rootPath; ?>/blogs/list">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal"> List </span>
                </a>
              </li>







            </ul>
          </div>
        </li>

      <?php } ?>



      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#guide" class="nav-link " aria-controls="guide" role="button"
          aria-expanded="false">
          <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-person-hiking  text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Guide</span>
        </a>
        <div class="collapse " id="guide">
          <ul class="nav ms-4">

            <?php if ($role == 'admin') { ?>

              <li class="nav-item ">
                <a class="nav-link " href="<?php echo $rootPath; ?>/guide/assign">
                  <span class="sidenav-mini-icon">
                    <Acr></Acr>
                  </span>
                  <span class="sidenav-normal"> Assign </span>
                </a>
              </li>

            <?php } ?>



            <li class="nav-item ">
              <a class="nav-link " href="<?php echo $rootPath; ?>/guide/list">
                <span class="sidenav-mini-icon"> L </span>
                <span class="sidenav-normal"> List </span>
              </a>
            </li>






          </ul>
        </div>
      </li>

      <!-- <li class="nav-item mt-3">
          <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">PAGES</h6>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#pagesExamples" class="nav-link " aria-controls="pagesExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-ungroup text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pages</span>
          </a>
          <div class="collapse " id="pagesExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#vrExamples">
                  <span class="sidenav-mini-icon"> V </span>
                  <span class="sidenav-normal"> Virtual Reality <b class="caret"></b></span>
                </a>
                <div class="collapse " id="vrExamples">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../pages/vr/vr-default.html">
                        <span class="sidenav-mini-icon text-xs"> V </span>
                        <span class="sidenav-normal"> VR Default </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../pages/vr/vr-info.html">
                        <span class="sidenav-mini-icon text-xs"> V </span>
                        <span class="sidenav-normal"> VR Info </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../pages/pricing-page.html">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal"> Pricing Page </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../pages/rtl-page.html">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal"> RTL </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../pages/widgets.html">
                  <span class="sidenav-mini-icon"> W </span>
                  <span class="sidenav-normal"> Widgets </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../pages/charts.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> Charts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../pages/sweet-alerts.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Sweet Alerts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../pages/notifications.html">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal"> Notifications </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#accountExamples" class="nav-link " aria-controls="accountExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-settings-gear-65 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Account</span>
          </a>
          <div class="collapse " id="accountExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " href="../account/settings.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Settings </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../account/billing.html">
                  <span class="sidenav-mini-icon"> B </span>
                  <span class="sidenav-normal"> Billing </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../account/invoice.html">
                  <span class="sidenav-mini-icon"> I </span>
                  <span class="sidenav-normal"> Invoice </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../account/security.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Security </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#applicationsExamples" class="nav-link " aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-ui-04 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Applications</span>
          </a>
          <div class="collapse " id="applicationsExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " href="../applications/kanban.html">
                  <span class="sidenav-mini-icon"> K </span>
                  <span class="sidenav-normal"> Kanban </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../applications/wizard.html">
                  <span class="sidenav-mini-icon"> W </span>
                  <span class="sidenav-normal"> Wizard </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../applications/datatables.html">
                  <span class="sidenav-mini-icon"> D </span>
                  <span class="sidenav-normal"> DataTables </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../applications/calendar.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> Calendar </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../applications/analytics.html">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal"> Analytics </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#ecommerceExamples" class="nav-link " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-archive-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Ecommerce</span>
          </a>
          <div class="collapse " id="ecommerceExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " href="../ecommerce/overview.html">
                  <span class="sidenav-mini-icon"> O </span>
                  <span class="sidenav-normal"> Overview </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#productsExample">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal"> Products <b class="caret"></b></span>
                </a>
                <div class="collapse " id="productsExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../ecommerce/products/new-product.html">
                        <span class="sidenav-mini-icon text-xs"> N </span>
                        <span class="sidenav-normal"> New Product </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../ecommerce/products/edit-product.html">
                        <span class="sidenav-mini-icon text-xs"> E </span>
                        <span class="sidenav-normal"> Edit Product </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../ecommerce/products/product-page.html">
                        <span class="sidenav-mini-icon text-xs"> P </span>
                        <span class="sidenav-normal"> Product Page </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../ecommerce/products/products-list.html">
                        <span class="sidenav-mini-icon text-xs"> P </span>
                        <span class="sidenav-normal"> Products List </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#ordersExample">
                  <span class="sidenav-mini-icon"> O </span>
                  <span class="sidenav-normal"> Orders <b class="caret"></b></span>
                </a>
                <div class="collapse " id="ordersExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../ecommerce/orders/list.html">
                        <span class="sidenav-mini-icon text-xs"> O </span>
                        <span class="sidenav-normal"> Order List </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../ecommerce/orders/details.html">
                        <span class="sidenav-mini-icon text-xs"> O </span>
                        <span class="sidenav-normal"> Order Details </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../ecommerce/referral.html">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal"> Referral </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#teamExamples" class="nav-link " aria-controls="teamExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Team</span>
          </a>
          <div class="collapse " id="teamExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " href="../team/projects.html">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal"> All Projects </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../team/teams.html">
                  <span class="sidenav-mini-icon"> T </span>
                  <span class="sidenav-normal"> Teams </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../team/new-user.html">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal"> New User </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../team/overview.html">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal"> Profile Overview </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../team/reports.html">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal"> Reports </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#projectsExamples" class="nav-link " aria-controls="projectsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-building text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Projects</span>
          </a>
          <div class="collapse " id="projectsExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " href="../projects/general.html">
                  <span class="sidenav-mini-icon"> G </span>
                  <span class="sidenav-normal"> General </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../projects/timeline.html">
                  <span class="sidenav-mini-icon"> T </span>
                  <span class="sidenav-normal"> Timeline </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../projects/new-project.html">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal"> New Project </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#authExamples" class="nav-link " aria-controls="authExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Authentication</span>
          </a>
          <div class="collapse " id="authExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#signinExample">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Sign In <b class="caret"></b></span>
                </a>
                <div class="collapse " id="signinExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/signin/basic.html">
                        <span class="sidenav-mini-icon text-xs"> B </span>
                        <span class="sidenav-normal"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/signin/cover.html">
                        <span class="sidenav-mini-icon text-xs"> C </span>
                        <span class="sidenav-normal"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/signin/illustration.html">
                        <span class="sidenav-mini-icon text-xs"> I </span>
                        <span class="sidenav-normal"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#signupExample">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Sign Up <b class="caret"></b></span>
                </a>
                <div class="collapse " id="signupExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/signup/basic.html">
                        <span class="sidenav-mini-icon text-xs"> B </span>
                        <span class="sidenav-normal"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/signup/cover.html">
                        <span class="sidenav-mini-icon text-xs"> C </span>
                        <span class="sidenav-normal"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/signup/illustration.html">
                        <span class="sidenav-mini-icon text-xs"> I </span>
                        <span class="sidenav-normal"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#resetExample">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal"> Reset Password <b class="caret"></b></span>
                </a>
                <div class="collapse " id="resetExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/reset/basic.html">
                        <span class="sidenav-mini-icon text-xs"> B </span>
                        <span class="sidenav-normal"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/reset/cover.html">
                        <span class="sidenav-mini-icon text-xs"> C </span>
                        <span class="sidenav-normal"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/reset/illustration.html">
                        <span class="sidenav-mini-icon text-xs"> I </span>
                        <span class="sidenav-normal"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#lockExample">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal"> Lock <b class="caret"></b></span>
                </a>
                <div class="collapse " id="lockExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/lock/basic.html">
                        <span class="sidenav-mini-icon text-xs"> B </span>
                        <span class="sidenav-normal"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/lock/cover.html">
                        <span class="sidenav-mini-icon text-xs"> C </span>
                        <span class="sidenav-normal"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/lock/illustration.html">
                        <span class="sidenav-mini-icon text-xs"> I </span>
                        <span class="sidenav-normal"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#StepExample">
                  <span class="sidenav-mini-icon"> 2 </span>
                  <span class="sidenav-normal"> 2-Step Verification <b class="caret"></b></span>
                </a>
                <div class="collapse " id="StepExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/verification/basic.html">
                        <span class="sidenav-mini-icon text-xs"> B </span>
                        <span class="sidenav-normal"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/verification/cover.html">
                        <span class="sidenav-mini-icon text-xs"> C </span>
                        <span class="sidenav-normal"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/verification/illustration.html">
                        <span class="sidenav-mini-icon text-xs"> I </span>
                        <span class="sidenav-normal"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#errorExample">
                  <span class="sidenav-mini-icon"> E </span>
                  <span class="sidenav-normal"> Error <b class="caret"></b></span>
                </a>
                <div class="collapse " id="errorExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/error/404.html">
                        <span class="sidenav-mini-icon text-xs"> E </span>
                        <span class="sidenav-normal"> Error 404 </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="../authentication/error/500.html">
                        <span class="sidenav-mini-icon text-xs"> E </span>
                        <span class="sidenav-normal"> Error 500 </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <hr class="horizontal dark" />
          <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">DOCS</h6>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#basicExamples" class="nav-link " aria-controls="basicExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-spaceship text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Basic</span>
          </a>
          <div class="collapse " id="basicExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#gettingStartedExample">
                  <span class="sidenav-mini-icon"> G </span>
                  <span class="sidenav-normal"> Getting Started <b class="caret"></b></span>
                </a>
                <div class="collapse " id="gettingStartedExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/quick-start/argon-dashboard" target="_blank">
                        <span class="sidenav-mini-icon text-xs"> Q </span>
                        <span class="sidenav-normal"> Quick Start </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank">
                        <span class="sidenav-mini-icon text-xs"> L </span>
                        <span class="sidenav-normal"> License </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard" target="_blank">
                        <span class="sidenav-mini-icon text-xs"> C </span>
                        <span class="sidenav-normal"> Contents </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/build-tools/argon-dashboard" target="_blank">
                        <span class="sidenav-mini-icon text-xs"> B </span>
                        <span class="sidenav-normal"> Build Tools </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="default.html#foundationExample">
                  <span class="sidenav-mini-icon"> F </span>
                  <span class="sidenav-normal"> Foundation <b class="caret"></b></span>
                </a>
                <div class="collapse " id="foundationExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/colors/argon-dashboard" target="_blank">
                        <span class="sidenav-mini-icon text-xs"> C </span>
                        <span class="sidenav-normal"> Colors </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/grid/argon-dashboard" target="_blank">
                        <span class="sidenav-mini-icon text-xs"> G </span>
                        <span class="sidenav-normal"> Grid </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/typography/argon-dashboard" target="_blank">
                        <span class="sidenav-mini-icon text-xs"> T </span>
                        <span class="sidenav-normal"> Typography </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/icons/argon-dashboard" target="_blank">
                        <span class="sidenav-mini-icon text-xs"> I </span>
                        <span class="sidenav-normal"> Icons </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="default.html#componentsExamples" class="nav-link " aria-controls="componentsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Components</span>
          </a>
          <div class="collapse " id="componentsExamples">
            <ul class="nav ms-4">
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal"> Alerts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/badge/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> B </span>
                  <span class="sidenav-normal"> Badge </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> B </span>
                  <span class="sidenav-normal"> Buttons </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/cards/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> Card </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> Carousel </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal"> Collapse </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> D </span>
                  <span class="sidenav-normal"> Dropdowns </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/forms/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> F </span>
                  <span class="sidenav-normal"> Forms </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/modal/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> M </span>
                  <span class="sidenav-normal"> Modal </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/navs/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal"> Navs </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal"> Navbar </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal"> Pagination </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal"> Popovers </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/progress/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal"> Progress </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Spinners </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/tables/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> T </span>
                  <span class="sidenav-normal"> Tables </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/argon-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> T </span>
                  <span class="sidenav-normal"> Tooltips </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/creativetimofficial/ct-argon-dashboard-pro/blob/main/CHANGELOG.md" target="_blank">
            <div class="icon icon-shape icon-sm text-center  me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-align-left-2 text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Changelog</span>
          </a>
        </li> -->
    </ul>
  </div>
  <div class="sidenav-footer mx-3 my-3">
    <div class="card card-plain shadow-none" id="sidenavCard">
      <!-- <img class="w-60 mx-auto" src="../../assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration"> -->
      <div class="card-body text-center p-3 w-100 pt-0">
        <div class="docs-info">
          <h6 class="mb-0">Need help?</h6>
          <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
        </div>
      </div>
    </div>
    <a href="#"  
      class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
  </div>
</aside>

<style>
/* Tambah ke fail CSS utama anda */
.bg-koko {
    background-color:rgb(190, 125, 56) !important;
}
</style>
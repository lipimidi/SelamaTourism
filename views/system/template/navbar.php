<nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
  data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <?php
        foreach ($breadcrumbs as $index => $breadcrumb) {
          // If this is the last breadcrumb (current page)
          if ($index === count($breadcrumbs) - 1) {
            echo '<li class="breadcrumb-item text-sm text-white active" aria-current="page">';
            echo htmlspecialchars($breadcrumb['title']);
            echo '</li>';
          } else {
            echo '<li class="breadcrumb-item text-sm">';
            echo '<a class="text-white" href="' . $rootPath . htmlspecialchars($breadcrumb['url']) . '">';
            echo htmlspecialchars($breadcrumb['title']);
            echo '</a>';
            echo '</li>';
          }
        }
        ?>
      </ol>
      <h6 class="font-weight-bolder mb-0 text-white">
        <?php echo htmlspecialchars(end($breadcrumbs)['title']); ?>
      </h6>
    </nav>

    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
      </div>
      <ul class="navbar-nav justify-content-end" id="navbarNav">
        <li class="nav-item d-flex align-items-center dropdown">
          <!-- The link to toggle dropdown -->
          <button  href="#" class="nav-link text-white font-weight-bold px-0 dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none"><?php echo $_SESSION['user_details']['email'] ?></span>
          </button >

          <!-- The dropdown menu, initially hidden -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
            <li>
              <a class="dropdown-item" href="<?php echo $rootPath; ?>/profile">
                <i class="fa fa-user me-sm-1"></i>
                Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="<?php echo $rootPath; ?>/signout">
                <i class="fa fa-user me-sm-1"></i>
                Sign Out
              </a>
            </li>
          </ul>
        </li>
      </ul>


    </div>

    <div class="sidenav-toggler sidenav-toggler-inner d-block ms-4">
      <a href="javascript:;" class="nav-link p-0">
        <div class="sidenav-toggler-inner">
          <i class="sidenav-toggler-line bg-white"></i>
          <i class="sidenav-toggler-line bg-white"></i>
          <i class="sidenav-toggler-line bg-white"></i>
        </div>
      </a>
    </div>
  </div>
</nav>
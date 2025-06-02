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


<body class="g-sidenav-show   bg-gray-200">

  <!-- End Google Tag Manager (noscript) -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidenav.php"); ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar.php"); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex justify-content-end">
                 <a href="<?php echo $rootPath?>/staff/addnew" class="btn  bg-gradient-primary">Add</a>
              </div>
            </div>

            <div class=" ">

              <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
                <!-- <div class="dataTable-top">
                  <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                      </select> entries per page</label></div>
                </div> -->
                <div class="dataTable-container" class="">
                  <table class="table table-flush dataTable-table" id="list">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">REF</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">Username</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">Email</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#">Role</a></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                          data-sortable=""><a href="#"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr>
                        <td class="text-sm font-weight-normal">Tiger Nixon</td>
                        <td class="text-sm font-weight-normal">System Architect</td>
                        <td class="text-sm font-weight-normal">Edinburgh</td>
                        <td class="text-sm font-weight-normal">61</td>
                        <td class="text-sm font-weight-normal">2011/04/25</td>
                        <td class="text-sm font-weight-normal">$320,800</td>
                      </tr> -->

                    </tbody>
                  </table>
                </div>
                <!-- <div class="dataTable-bottom">
                  <div class="dataTable-info">Showing 1 to 10 of 57 entries</div>
                  <nav class="dataTable-pagination">
                    <ul class="dataTable-pagination-list">
                      <li class="pager"><a href="#" data-page="1">‹</a></li>
                      <li class="active"><a href="#" data-page="1">1</a></li>
                      <li class=""><a href="#" data-page="2">2</a></li>
                      <li class=""><a href="#" data-page="3">3</a></li>
                      <li class=""><a href="#" data-page="4">4</a></li>
                      <li class=""><a href="#" data-page="5">5</a></li>
                      <li class=""><a href="#" data-page="6">6</a></li>
                      <li class="pager"><a href="#" data-page="2">›</a></li>
                    </ul>
                  </nav>
                </div> -->
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

  <script>

    $(document).ready(function () {



      $('#list').DataTable({
        ajax: {
          url: '<?php echo $rootPath; ?>/staff/getlist',  // Your server-side URL
          method: 'POST',  // Use POST for security
          data: function (d) {
            // Pass additional DataTables parameters to the server via POST

            console.log(d.search.value);
            return {
              start: d.start,                   // Starting point for pagination
              length: d.length,                 // Number of rows per page
              search: d.search.value,           // Global search term
              order: d.order,                   // Sorting details
              columns: d.columns,               // Column info, useful if needed
              draw: d.draw,                     // Draw counter for DataTables
              staff_getlist: "staff_getlist",     // This will be used to identify the request in PHP
            };
          }
        },
        columns: [
          // { data: 'id'},
          { data: 'id' },
          { data: 'username' },
          { data: 'email' },
          { data: 'name' },
          {
            data: 'id',  // We use the `id` to add the "More Details" button
            render: function (data, type, row) {
              // Return the HTML for the "More Details" button
              return '<a class="btn bg-gradient-primary more-details"  href="<?php echo $rootPath ?>/staff/' + data + '" data-id="' + data + '">More Details</a>';
            }
          },
        ],
        columnDefs: [
          // Prioritize the first column (Name)
          { responsivePriority: 1, targets: 1 }, // First column (Name)
          // Prioritize the last column (Salary)
          { responsivePriority: 1, targets: -1 } // Last column (Salary)
        ],
        order: [[0, 'desc']],  // Default sorting by ID column
        serverSide: true,     // Enable server-side processing
        paging: true,         // Enable pagination
        searching: true,      // Enable searching
        select: false,         // Enable row selection
        processing: true,     // Show a processing indicator while loading data
        responsive: true,     // Make the table responsive
        ordering: false,


      });
    });


  </script>

</body>

</html>
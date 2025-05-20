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
                <form class=" " enctype="multipart/form-data" method="POST">
                  <!--single form panel-->
       
                  <div class="row text-center mt-4">
                    <div class="col-10 mx-auto">
                      <h5 class="font-weight-normal">Upload Insurance</h5>
                      <!-- <p>Give us more details about you. What do you enjoy doing in your spare time?</p> -->
                    </div>
                  </div>
                  <?php
                  $count = $_SESSION['booking']['people_count'];
                  for ($i = 1; $i <= $count; $i++) {
                    ?>
                    <!-- Dropzone -->
                    <div class="text-start">
                      <label class="" for="dropzoneArea-<?php echo $i ?>">
                        <h6>Person <?php echo $i ?></h6>
                      </label>

                      <div class="dropzone" id="dropzoneArea-<?php echo $i ?>">

                      </div>

                    </div>
                  <?php } ?>

                  <!-- Submit Button -->
                  <!-- <div class="row">
                    <div class="col-6 mx-auto">
                      <button type="submit" class="btn btn-primary w-100">Next</button>
                    </div>
                  </div> -->

              </div>
              <div class="button-row d-flex mt-4">
                <button type="submit" class="btn bg-gradient-dark ms-auto mb-0  " name="confirminsurance">Save</button>


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
        var myDropzone = new Dropzone("#dropzoneArea-<?php echo $i; ?>", {
          url: '<?php echo $rootPath; ?>/book/upload',  // Ensure you replace with a valid URL for the upload
          paramName: 'file',  // The name used to send the file
          maxFilesize: 2,  // Max file size in MB
          acceptedFiles: '.jpg,.jpeg,.png,.gif,.pdf',  // Allowed file types
          dictDefaultMessage: 'Drag and drop files here or click to upload',
          addRemoveLinks: true,  // Allow file removal
          previewsContainer: "#dropzoneArea-<?php echo $i; ?>",  // Where to display the previews
          maxFiles: 1, // Only 1 file can be uploaded at any time

          // Default Thumbnail for non-image files like PDF
          defaultThumbnail: "<?php echo $rootPath; ?>/assets/img/icon512_maskable.png", // Provide a default thumbnail

          init: function () {
            var dz = this;  // Store the Dropzone instance

            // Sending event (for appending additional parameters)
            this.on("sending", function (file, xhr, formData) {
              formData.append("user_id", "<?php echo $_SESSION['user_details']['id']; ?>");  // Example of adding a custom parameter
              formData.append("people_number", "<?php echo $i; ?>");  // Adding dynamic custom parameter
              formData.append("upload_temp", "<?php echo $i; ?>");  // Adding dynamic custom parameter
            });

            // Removed file event (for handling file removal)
            this.on("removedfile", function (file) {
              var fileName = file.name; // Get the file name
              var xhr = new XMLHttpRequest();
              xhr.open("POST", "<?php echo $rootPath; ?>/book/remove", true);
              xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
              xhr.send("file=" + encodeURIComponent(fileName) + "&user_id=<?php echo $_SESSION['user_details']['id']; ?>" + "&people_number=<?php echo $i; ?>" + "&remove_temp=true");

              xhr.onload = function () {
                var response = xhr.responseText; // Server response (e.g., file path or success message)
                console.log("File removed successfully. Server response: " + response);
              };
            });

            // Check if there's a file stored in session for this index ($i)
            <?php if (isset($_SESSION['booking']['insurance'][$i])): ?>
              var fileInfo = <?php echo json_encode($_SESSION['booking']['insurance'][$i]); ?>;
              console.log("Session file info for Dropzone: ", fileInfo);  // Debugging line

              // Clear any existing files (in case there's already a file in Dropzone)
              dz.removeAllFiles();

              // Iterate through each file in session (you could have multiple but we handle one for now)
              fileInfo.forEach(function (file) {
                // Path to the uploaded file
                var filePath = "<?php echo $rootPath; ?>/" + file.file_path; // Full URL to the file
                var fileName = file.file_name;
                var fileSize = file.file_size;
                var fileType = file.file_type;

                console.log("Adding file path: " + filePath);

                // Create the mock file object that Dropzone can recognize
                var mockFile = {
                  name: fileName,
                  size: fileSize,
                  type: fileType,
                  url: filePath
                };

                // Emit the 'addedfile' event to add the file to Dropzone
                dz.emit('addedfile', mockFile);

                // Check if the file is an image or PDF, and assign the correct thumbnail
                if (fileType.startsWith('image')) {
                  dz.emit('thumbnail', mockFile, filePath); // Use the filePath directly for the image preview
                } else if (fileType === "application/pdf") {
                  dz.emit("thumbnail", mockFile, "<?php echo $rootPath; ?>/assets/img/icon512_maskable.png"); // PDF Default thumbnail
                } else {
                  dz.emit("thumbnail", mockFile, "<?php echo $rootPath; ?>/assets/img/icon512_maskable.png"); // Default thumbnail for non-image files
                }

                // Optionally, you can use this to trigger the 'complete' event to indicate the file has finished being processed
                dz.emit('complete', mockFile);

                // Now force Dropzone to update the file count
                dz.files.push(mockFile);
              });
            <?php endif; ?>

            // Ensure only one file is allowed
            this.on("addedfile", function (file) {
              // If a file is already in Dropzone, remove it
              if (this.files.length > 1) {
                this.removeFile(this.files[0]); // Remove the previous file if a new one is added
              }

              // Set the default thumbnail if file is an image or any other type
              if (!file.type || !file.type.startsWith('image')) {
                dz.emit("thumbnail", file, "<?php echo $rootPath; ?>/assets/img/icon512_maskable.png"); // Default thumbnail for non-image files
              }
            });

            // Optional: Handling non-image files like PDFs to display a custom default thumbnail for them
            this.on("addedfile", function (file) {
              if (file.type === "application/pdf") {
                dz.emit("thumbnail", file, "<?php echo $rootPath; ?>/assets/img/icon512_maskable.png"); // Default thumbnail for non-image files
              }
            });
          },

          success: function (file, response) {
            console.log("File uploaded:", file);
          },

          error: function (file, response) {
            console.log("Error uploading file:", response);
          }
        });
      <?php } ?>
    });
  </script>


  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script_book.php"); ?>












</body>

</html>
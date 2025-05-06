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




                        <div class="row  mt-5">
                            <div class="col-12 mt-lg-0 mt-4">
                                <!-- Card Profile -->

                                <!-- Card Basic Info -->
                                <div class="card mt-4" id="basic-info">
                                    <div class="card-header">
                                        <h5>Blog</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="card-body pt-0">

                                        <div class="row  mt-4 mb-4 ">
                                                <div class="col-12">
                                                    <label class="form-label">Main Image</label>
                                                    <input type="file" id="imagemain">
                                                </div>


                                            </div>


                                            <div class="row  mt-4 mb-4 ">
                                                <div class="col-12">
                                                    <label class="form-label">Title</label>
                                                    <div id="title-editor">
                                                        <div id="title-container">


                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row  mt-4 mb-4 ">
                                                <div class="col-12 ">
                                                    <label class="form-label">Content</label>

                                                    <div id="content-editor">
                                                        <div id="content-container" style="height: 300px;"></div>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto   js-btn-next" type="button"
                                                    id="savebtn">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

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

            var quill1 = new Quill('#title-container', {
                theme: 'snow',
                placeholder: 'Write your blog title here...',
                modules: {
                    toolbar: [
                        [{ 'header': '1' }, { 'header': '2' }],
                        ['bold', 'italic', 'underline'],
                        [{ 'color': [] }, { 'background': [] }],
                        ['blockquote', 'code-block'],
                        ['clean']
                    ]
                }
            });

            var quill2 = new Quill('#content-container', {
                theme: 'snow',
                placeholder: 'Write your blog content here...',
                modules: {
                    toolbar: {
                        container: [
                            [{ 'header': '2' }, { 'header': '3' }],
                            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                            ['bold', 'italic', 'underline'],
                            [{ 'align': [] }],
                            ['link', 'image'],
                            [{ 'color': [] }, { 'background': [] }],
                            ['blockquote', 'code-block'],
                            ['clean']
                        ],
                        handlers: {
                            image: selectLocalImage
                        }
                    }
                },

                height: 300, // Specify the height of the editor

            });

            var defaultContent = `<?php echo $title ?>`;
            quill1.root.innerHTML = decodeHtmlEntities(defaultContent);




            // Set default content for the editor
            var defaultContent2 = `<?php echo $content ?>`;

            // Set the default HTML content into the Quill editor
            quill2.root.innerHTML = decodeHtmlEntities(defaultContent2);


            function decodeHtmlEntities(encodedString) {
                var textarea = document.createElement('textarea');
                textarea.innerHTML = encodedString;
                return textarea.value;
            }


            // Custom image handler with compression
            function selectLocalImage() {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/jpeg');
                input.click();

                input.onchange = () => {
                    const file = input.files[0];
                    const maxSize = 1024 * 200; // 200 KB

                    if (file && file.size > maxSize) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            const img = new Image();
                            img.onload = () => {
                                const canvas = document.createElement('canvas');
                                const maxWidth = 600;
                                const scale = maxWidth / img.width;
                                canvas.width = maxWidth;
                                canvas.height = img.height * scale;
                                const ctx = canvas.getContext('2d');
                                ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

                                const compressedDataUrl = canvas.toDataURL('image/jpeg', 0.7);
                                insertToEditor(compressedDataUrl);
                            };
                            img.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    } else if (file) {
                        const reader = new FileReader();
                        reader.onload = () => {
                            insertToEditor(reader.result);
                        };
                        reader.readAsDataURL(file);
                    }
                };
            }

            // Insert image into Quill editor
            function insertToEditor(url) {
                const range = quill2.getSelection();
                quill2.insertEmbed(range.index, 'image', url);
            }

            $('#savebtn').on('click', function () {
                // Get content from Quill editors
                var titleContent = quill1.root.innerHTML;
                var content = quill2.root.innerHTML;

                // Get the image file
                var imageFile = $('#imagemain')[0].files[0];

                // Prepare form data
                var formData = new FormData();
                formData.append('id', '<?php echo $blog_id ?>');
                formData.append('title', titleContent);
                formData.append('content', content);
                formData.append('imagemain', imageFile);
                formData.append('blogs_edit', 'blogs_edit');

                // Send data via AJAX
                $.ajax({
                    url: '<?php echo $rootPath; ?>/blogs/blogs_edit',
                    type: 'POST',
                    data: formData,
                    processData: false, // Important!
                    contentType: false, // Important!
                    success: function (response) {
                        // alert('Content and image saved successfully!');
                        window.location.href = '<?php echo $rootPath; ?>/blogs/list'; 
                    },
                    error: function (xhr, status, error) {
                        // alert('An error occurred: ' + error);
                        swalAlert('error', 'Error', 'error', 'OK' );

                    }
                });
            });


        });





    </script>

</body>

</html>
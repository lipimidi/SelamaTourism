<!--   Core JS Files   -->
<script src="<?php echo $rootPath; ?>/assets/js/core/popper.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- Kanban scripts -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/nouislider.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/dragula/dragula.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/jkanban/jkanban.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/chartjs.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/fullcalendar.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/dropzone.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/jquery-3.7.1.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/moment.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/datatables.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/leaflet.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/sweetalert.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/jquery.fancybox.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/quill.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/html5-qrcode.min.js"></script>


<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo $rootPath; ?>/assets/js/argon-dashboard.min.js"></script>

<script src="https://js.pusher.com/beams/2.1.0/push-notifications-cdn.js"></script>


<script>
  // if ('serviceWorker' in navigator) {
  //   window.addEventListener('load', () => {
  //     navigator.serviceWorker.register('<?php echo $rootPath; ?>/assets/js/service-worker.js')
  //       .then(reg => console.log("Service Worker Registered", reg))
  //       .catch(err => console.log("Service Worker Registration Failed", err));
  //   });
  // }
</script>

<script>
  // if (navigator.geolocation) {
  //   navigator.geolocation.getCurrentPosition(function (position) {
  //     var latitude = position.coords.latitude;
  //     var longitude = position.coords.longitude;

  //     // Send the coordinates to the server
  //     console.log(latitude + "," + longitude);
  //   }, function (error) {
  //     console.error('Error getting location: ', error);
  //   });
  // } else {
  //   alert('Geolocation is not supported by this browser.');
  // }
</script>
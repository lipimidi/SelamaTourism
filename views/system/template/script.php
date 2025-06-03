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



<script>
  let beamsClient; // 🔓 Global so logout can access it

  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('<?php echo $rootPath; ?>/service-worker.js')
        .then(registration => {
          beamsClient = new PusherPushNotifications.Client({
            instanceId: 'bf10c984-1d60-42a1-8394-d2104b1dcd22',
            serviceWorkerRegistration: registration
          });

          beamsClient.start()
            .then(() => {
              beamsClient.addDeviceInterest('user-<?php echo $_SESSION['user_details']['id'] ?>')
                .catch(err => {
                  console.error('Error subscribing to interest', err);
                });
            })
            .catch((err) => {
              console.error('Error initializing PusherBeams:', err);
            });
        })
        .catch((err) => {
          console.error('Error registering service worker:', err);
        });
    });
  }

  // ✅ Logout function using global beamsClient
  function logoutWithBeams() {
    if (beamsClient) {
      beamsClient.clearDeviceInterests()
        .then(() => {
          console.log('All interests removed.');
          window.location.href = '<?php echo $rootPath; ?>/signout';
        })
        .catch((err) => {
          console.error('Failed to clear Beams interests:', err);
          window.location.href = '<?php echo $rootPath; ?>/signout';
        });
    } else {
      console.warn('Beams client not initialized, skipping interest clearing.');
      window.location.href = '<?php echo $rootPath; ?>/signout';
    }
  }


</script>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery-migrate-3.0.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.stellar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.animateNumber.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/scrollax.min.js')); ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo e(asset('js/google-map.js')); ?>"></script>
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>
  
  <script>
    function check() {
  var checkBox = document.getElementById("checbox");
  var text1 = document.getElementsByClassName("text1");
  var text2 = document.getElementsByClassName("text2");

  for (var i = 0; i < text1.length; i++) {
    if (checkBox.checked == true) {
      text1[i].style.display = "block";
      text2[i].style.display = "none";
    } else if (checkBox.checked == false) {
      text1[i].style.display = "none";
      text2[i].style.display = "block";
    }
  }
}
check();
  </script><?php /**PATH /home/creaspo/Projects/continuouscare/resources/views/layouts/frontend/footer-scripts.blade.php ENDPATH**/ ?>
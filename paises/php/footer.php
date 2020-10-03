<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; NASA Space Apps Challenge Córdoba <strong><span><?php echo $app; ?></span></strong>. <?php echo date("Y"); ?>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../vendor/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendor/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../vendor/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../vendor/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../vendor/assets/vendor/counterup/counterup.min.js"></script>
  <script src="../../vendor/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../vendor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../vendor/assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../vendor/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../../vendor/assets/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
       (function ($) {
           $('#yobusco').keyup(function () {
               var rex = new RegExp($(this).val(), 'i');
               $('.buscar').hide();
               $('.buscar').filter(function () {
                   return rex.test($(this).text());
               }).show();
           })
       }(jQuery));
     });
  </script>
<?php

use App\Models\Konfigurasi_model;

$konfigurasi  = new Konfigurasi_model;
$site         = $konfigurasi->listing();
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
?>
<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Sisfo Media</span></strong>. 2023
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/purecounter/purecounter.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url() ?>/assets/template/assets/js/main.js"></script>
<!-- DataTables  & Plugins -->

<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script>
  $(function() {
    $('#example1').DataTable();
  });
</script>
</body>

</html>
<?php

use App\Models\Konfigurasi_model;
use App\Models\Menu_model;

$konfigurasi  = new Konfigurasi_model;
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
?>
<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
  <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    <div class="align-items-center d-none d-md-flex">
      <i class="fa fa-home"></i> <?php echo tagline(); ?>
    </div>
    <div class="d-flex align-items-center">
      <i class="bi bi-phone"></i> <?php echo telepon() ?>
    </div>
  </div>
</div>
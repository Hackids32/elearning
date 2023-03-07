<?php

use App\Models\Berita_model;

$m_berita   = new Berita_model();
$sidebar  = $m_berita->sidebar();
?>
<main id="main">

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-8">
          <div class="card" style="margin-bottom: 20px;">
            <img src="http://localhost/compro-ci4-javawebmedia/assets/upload/image/<?php echo $berita['gambar']; ?>">
            <br>
            <div class="card-body">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $berita['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="min-height: 50vh;"></iframe>
              </div>
              <h3><?php echo $berita['judul_berita'] ?></h3>
              <?php echo $berita['isi'] ?>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h3>Berita Lainnya</h3>
            </div>
            <div class="card-body">
              <?php foreach ($sidebar as $sidebar) { ?>
                <div class="row">
                  <div class="col-3">
                    <?php if ($sidebar['gambar'] == "") { ?>
                      <img src="<?php echo icon() ?>" class="img img-thumbnail">
                    <?php } else { ?>
                      <img src="<?php echo base_url('assets/upload/image/thumbs/' . $sidebar['gambar']) ?>" class="img img-thumbnail">
                    <?php } ?>
                  </div>
                  <div class="col-9">
                    <h4 style="font-size: 18px;">
                      <a href="<?php echo base_url('berita/read/' . $sidebar['slug_berita']) ?>">
                        <?php echo $sidebar['judul_berita'] ?>
                      </a>
                    </h4>
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $sidebar['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <small class="text-gray-dark"><i class="fa fa-eye"></i> <?php echo $sidebar['hits'] ?> views</small>
                  </div>
                  <div class="clearfix">
                    <br>
                  </div>
                  <hr>
                <?php } ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->
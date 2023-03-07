<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <?php foreach ($berita as $berita) { ?>
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="card" style="margin-bottom: 20px;">
                            <img src="http://localhost/compro-ci4-javawebmedia/assets/upload/image/<?php echo $berita['gambar']; ?>">
                            <div class="card-body">
                                <h6><?php echo $berita['judul_berita'] ?></h6>
                                <p>
                                    <a href="<?php echo base_url('berita/read/' . $berita['slug_berita']) ?>" class="btn btn-success">
                                        <i class="fa fa-chevron-right"></i> Start
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
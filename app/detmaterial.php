<?php $this->layout('template') ?>
<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?=$base_url?>">Home</a></li>
                <li>Material Furniture</li>
            </ol>
            <h2><?=$data['judul']?></h2>
        </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section class="counts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="service-widget">
                        <div class=" wow fadeIn ww">
                            <a href="material-<?=$data['judul_seo']."-".$data['id_material']?>">
                                <picture>
                                    <!--mobile-->
                                    <source media="(max-width: 600px)" srcset="images/material/small/<?=$data['gambar']?>">
                                    <!--dektop-->
                                    <source media="(min-width: 768px)" srcset="images/material/<?=$data['gambar']?>">
                                    <img src="images/material/<?=$data['gambar']?>" alt="<?=$data['judul']?>"
                                        class="img-responsive grow w-100" style="height: auto; overflow: hidden;">
                                    <picture>
                                    </picture>
                                </picture>
                            </a>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-10 offset-md-1">
                            <h3><?=$data['judul']?></h3>
                            <div class="mt-4"><?=$data['deskripsi']?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->

</main><!-- End #main -->
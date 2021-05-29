<?php $this->layout('template') ?>
<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?=$base_url?>">Home</a></li>
                <li>Material Furniture</li>
            </ol>
            <h2>Material Furniture</h2>
        </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section class="counts">
        <div class="container">
            <div class="row">
                <?php foreach($material as $r) : ?>
                <div class="col-lg-3 mb-4">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn ww">
                            <a href="material-<?=$r['judul_seo']."-".$r['id_material']?>">
                                <picture>
                                    <!--mobile-->
                                    <source media="(max-width: 600px)" srcset="images/material/<?=$r['gambar']?>">
                                    <!--dektop-->
                                    <source media="(min-width: 768px)" srcset="images/material/small/<?=$r['gambar']?>">
                                    <img src="images/material/<?=$r['gambar']?>" alt="<?=$r['judul']?>"
                                        class="img-responsive grow w-100" style="height: auto; overflow: hidden;">
                                    <picture>
                                    </picture>
                                </picture>
                            </a>
                        </div>
                        <div class="row product-card-text no-gutters justify-content-start">
                            <a href="material-<?=$r['judul_seo']."-".$r['id_material']?>">
                                <p class=" product-card-name" title="<?=$r['judul']?> "><?=$r['judul']?> </p>
                            </a>
                        </div>
                        <div class="product-card-text">
                            <!--<a href="material-<?=$r['judul_seo']."-".$r['id_material']?>" class="btn btn-danger btn-md btn-block"-->
                            <!--    item-id="52161">-->
                            <!--    Detail</a>-->
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section><!-- End Counts Section -->

</main><!-- End #main -->
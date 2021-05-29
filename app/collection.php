<?php $this->layout('template') ?>
<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?=$base_url?>">Home</a></li>
                <li>Product & Collection</li>
            </ol>
            <h2 class="text-white">Product & Collection</h2>
        </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section class="counts">
        <div class="container">
            <!-- <div class="section-title">
                <h2>Our Product</h2>
            </div> -->
            <div class="row">
                <?php foreach($produk as $r) : ?>
                <div class="col-lg-3 mb-4">
                    <div class="service-widget border bg-white">
                        <div class="post-media wow fadeIn ww align-middle">
                            <a href="produk-<?=$r['judul_seo']."-".$r['id_produk']?>">
                                <picture>
                                    <!--mobile-->
                                    <source media="(max-width: 600px)" srcset="images/produk/<?=$r['gambar']?>">
                                    <!--dektop-->
                                    <source media="(min-width: 768px)" srcset="images/produk/small/<?=$r['gambar']?>">
                                    <img src="images/produk/<?=$r['gambar']?>" alt="<?=$r['judul']?>"
                                        class="img-responsive grow w-100" style="height: auto; overflow: hidden;">
                                    <picture>
                                    </picture>
                                </picture>
                            </a>
                        </div>
                        <div class="row product-card-text no-gutters ">
                            <a href="produk-<?=$r['judul_seo']."-".$r['id_produk']?>">
                                <p class=" product-card-name" title="<?=$r['judul']?> "><?=$r['judul']?> </p>
                                <p style="height: 20px;" class="product-card-shop mt-2"> Rp <?=$r['harga']?></p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <div class="col-md-12">
                    <?php include 'paging.php' ?>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->

</main><!-- End #main -->
<?php $this->layout('template') ?>
<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ol>
            <h2>Blog</h2>
        </div>
    </section>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container bg-white">
            <div class="row no-gutters">
                <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <h2>Karya Jasa Furniture Manufacturer, UD</h2>
                        <p><?=$header['deskripsi']?></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Our Product</h2>
            </div>
            <div class="row">
                <?php foreach($products as $r) : ?>
                <div class="col-lg-3 mb-4">
                    <div class="box-product">
                        <img src="images/referensi/<?=$r['gambar']?>" alt="Avatar" class="image-product"
                            style="width:100%">
                        <div class="overlay">
                            <div class="middle-product">
                                <div class="text-product">
                                    <h4><?=$r['judul']?></h4>
                                    <a href="" class="btn btn-info">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section><!-- End Counts Section -->

</main><!-- End #main -->
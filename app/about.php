<?php $this->layout('template') ?>
<style>
    .cta {
        background: linear-gradient(rgba(40, 58, 90, 0.9), rgba(40, 58, 90, 0.9)), url('images/<?=$position['gambar']?>') fixed center center;
        background-size: cover;
        padding: 120px 0;
    }
</style>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <?php $no=1;foreach($slider as $r) : ?>
            <div class="carousel-item <?=($no==1)?'active' : ''?>">
                <img class="d-block" src="images/slider/<?=$r['gambar']?>" alt="First slide">
                <div class="carousel-container">
                    <div class="carousel-caption">
                        <h2 class="animate__animated animate__fadeInDown"><?=$r['judul']?></h2>
                        <p class="animate__animated animate__fadeInUp"><?=$r['deskripsi']?></p>
                        <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a> -->
                    </div>
                </div>
            </div>
            <?php $no++;endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?=$top['deskripsi']?>
                </div>
                <div class="col-md-12 mt-4">
                    <hr class="fuss">
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?=$middle['deskripsi']?>
                </div>
                <div class="col-md-12 mt-4">
                    <hr class="fuss">
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?=$bottom['deskripsi']?>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->
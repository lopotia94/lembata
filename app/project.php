<?php $this->layout('template') ?>
<style>
    .row-dashed .gris:before {
        position: absolute;
        content: " ";
        height: 100%;
        top: 0;
        left: -1px;
        border-left: 1px dashed #ddd;
    }

    .section-title {
        position: relative;
        -js-display: flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 100%;
    }

    .section-title-center span {
        margin: 0 15px;
    }

    .section-title b {
        display: block;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        height: 2px;
        opacity: .1;
        background-color: currentColor;
    }

    .section-title-main {

        font-size: 30px;
        font-family: 'Oswald';
        line-height: 30px;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 0;
        color: #00a86b;

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
                    <?=$deskripsi?>
                </div>
                <div class="col-md-12 mt-4">
                    <hr class="fussx">
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container section-title-container" style="margin-top:27px;">
            <h3 class="section-title section-title-center">
                <b></b>
                <span class="section-title-main">
                    LIST PORTFOLIO PROJECT
                </span>
                <b></b>
            </h3>
        </div>
        <div class="container">
            <div class="row row-small row-dashed" id="row-980242747">
                <div id="col-437431042" class="col medium-6 small-12 large-6">
                    <div class="col-inner text-right">
                        <h4 class="uppercase text-right">
                            <span style="color: #800000;">
                                <b class="box text-uppercase  font-weight-bold">INDONESIAN Hotel
                                    project
                                </b>
                            </span>
                        </h4>
                        <p><span style="color: #806959;">
                                <b class="box">
                                    <?php foreach($listproject1 as $r) : ?>
                                    <?= $r['judul'] ?><br>
                                    <?php endforeach ?>
                                </b>
                            </span>
                        </p>
                    </div>
                    <style>
                        #col-437431042>.col-inner {
                            padding: 0px 25px 0px 0px;
                        }
                    </style>
                </div>
                <div id="col-125424883" class="col gris medium-6 small-12 large-6">
                    <div class="col-inner">
                        <h4 class="uppercase text-left">
                            <span style="color: #800000;">
                                <b class="box  text-uppercase  font-weight-bold">Hotel project
                                    ABROAD
                                </b>
                            </span>
                        </h4>
                        <p>
                            <span style="color: #806959;">
                                <b class="box">
                                    <?php foreach($listproject2 as $r) : ?>
                                    <?= $r['judul'] ?><br>
                                    <?php endforeach ?>
                                </b>
                            </span>
                        </p>
                    </div>
                    <style>
                        #col-125424883>.col-inner {
                            padding: 0px 0px 0px 25px;
                        }
                    </style>
                </div>
                <style>
                    #row-980242747>.col>.col-inner {
                        padding: 0px 0px 33px 0px;
                    }
                </style>
            </div>
        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->
<?php $this->layout('template') ?>
<section class="mainn elytra cta aos-init aos-animate  d-flex align-items-center py-5"
    style="background: url('images/<?=$data['gambar']?>') no-repeat fixed ;background-size: cover;" data-aos="fade-up">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="gallary-header ">
                    <h2 class="text-center text-white"><strong class="">Galeri Video</strong></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-abu py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Galeri Video</h2>
            </div>
        </div>
        <div class="row list-videos">
            <?php foreach($video as $r) : ?>
            <div class="col-md-3 col-6 mb-4">
                <figure class="item-video">
                    <div class="thumb-icon">
                        <i class="fa fa-play"></i>
                    </div>
                    <figcaption class="video-content">
                        <span class="title-video"><?=$r['nama']?> </span>
                        <a href="<?=$r['url']?>" class="kipo popup-youtube ">
                            <i class="fa fa-play-circle fa-3x"></i>
                        </a>
                    </figcaption>
                    <figure class="thumbnail-img"
                        style="background-image: url('images/banner/<?=$r['gambar']?>'); background-size: cover; background-position: center center;">
                        <img src="images/banner/<?=$r['gambar']?>" style="display: none;">
                    </figure>
                </figure>
            </div>
            <?php endforeach ?>
        </div>
        <div class="row">
            <?php if(  $pagination['jmldata'] > $pagination['batas'] ) : ?>
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px">
                <div class="wp-pagenavi">
                    <center><?= $pagination['linkHalaman'] ?></center>
                </div>
            </div>
            <?php endif ?>
        </div>
    </div>
</section>


<div class="box has-hover   has-hover box-overlay dark box-text-middle">
    <div class="box-image">
        <a href="hotel-project-atlantic-villa-guest-house">
            <div class="image-zoom image-cover" style="padding-top:75%;">
                <img width="1000" height="667"
                    src="https://i2.wp.com/www.wisanka.com/indonesia-furniture/wp-content/uploads/2018/08/atlantic-3.jpg?ssl=1"
                    class="attachment- size- jetpack-lazy-image jetpack-lazy-image--handled"
                    alt="atlantic villa hotel project furniture"
                    srcset="https://i2.wp.com/www.wisanka.com/indonesia-furniture/wp-content/uploads/2018/08/atlantic-3.jpg?w=1000&amp;ssl=1 1000w, https://i2.wp.com/www.wisanka.com/indonesia-furniture/wp-content/uploads/2018/08/atlantic-3.jpg?resize=300%2C200&amp;ssl=1 300w, https://i2.wp.com/www.wisanka.com/indonesia-furniture/wp-content/uploads/2018/08/atlantic-3.jpg?resize=600%2C400&amp;ssl=1 600w, https://i2.wp.com/www.wisanka.com/indonesia-furniture/wp-content/uploads/2018/08/atlantic-3.jpg?resize=768%2C512&amp;ssl=1 768w"
                    data-recalc-dims="1" data-lazy-loaded="1" sizes="(max-width: 1000px) 100vw, 1000px" loading="eager">
                <div class="overlay2" style="background-color:1"></div>
            </div>
        </a> </div>
    <div class="box-text text-center is-large">
        <div class="box-text-inner">
            <p><a href="hotel-project-atlantic-villa-guest-house"></a></p><a
                href="hotel-project-atlantic-villa-guest-house">
                <h4>Atlantic Villa</h4>
                <p>Namibia</p>
            </a>
            <p><a href="hotel-project-atlantic-villa-guest-house"></a></p>
        </div>
    </div>
</div>
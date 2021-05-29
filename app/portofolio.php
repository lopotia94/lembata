<?php $this->layout('template') ?>
<section class="bg-abu martop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="">Gallery</h2>
                </div>

                <!-- <p>Berikut merupakan hasil jadi produksi dari seluruh indonesia yang kita kerjakan</p> -->
                <hr>
            </div>
        </div>
        <div class="row album-photos ">
            <?php foreach($portofolio as $r) : ?>
            <div class="col-md-3 col-6 mb-4">
                <a href="images/gallery/<?=$r['gambar']?>" data-gall="portfolioGallery" class="venobox preview-link"
                    title="<?=$r['nama']?>">
                    <picture>
                        <source media="(min-width: 651px)" srcset="images/gallery/<?=$r['gambar']?>">
                        <source media="(max-width: 650px)" srcset="images/gallery/<?=$r['gambar']?>">
                        <img class="w-100" src="images/gallery/<?=$r['gambar']?>" alt="<?=$data['title']?>">
                    </picture>
                </a>
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
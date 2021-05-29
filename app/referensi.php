<?php $this->layout('template') ?>
<section class="bg-abu martop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?=$data['judul']?></h2>
                <hr>
            </div>
        </div>
        <div class="row album-photos">
            <?php foreach($referensi as $r) : ?>
            <div class="col-md-3 col-6 mb-4">
                <a href="images/gallery_referensi/<?=$r['gambar']?>" data-gall="portfolioGallery" class="venobox preview-link"
                    title="<?=$data['judul']?>">
                    <picture>
                        <source media="(min-width: 651px)" srcset="images/gallery_referensi/<?=$r['gambar']?>">
                        <source media="(max-width: 650px)" srcset="images/gallery_referensi/small/<?=$r['gambar']?>">
                        <img class="w-100" src="images/gallery_referensi/<?=$r['gambar']?>" alt="<?=$data['judul']?>">
                    </picture>
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
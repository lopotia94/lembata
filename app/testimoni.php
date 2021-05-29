<?php $this->layout('template') ?>
<section class="bg-abu martop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Testimoni</h2>
                <p class="mb-0">Kami memiliki banyak pelanggan dari dalam maupun luar kota,</p>
                <p class="mt-0">dengan pelayanan yang optimal dan pengerjaan yang maksimal membuat banyak pelanggan puas
                    dengan produk kami.</p>
                <hr>
            </div>
        </div>
        <div class="row album-photos ">
            <?php foreach($testimoni as $r) : ?>
            <div class="col-md-3 col-6 mb-4">
                <a href="images/testimoni/<?=$r['gambar']?>" data-gall="portfolioGallery" class="venobox preview-link"
                    title="<?=$r['nama']?>">
                    <picture>
                        <source media="(min-width: 651px)" srcset="images/testimoni/<?=$r['gambar']?>">
                        <source media="(max-width: 650px)" srcset="images/testimoni/small/<?=$r['gambar']?>">
                        <img class="w-100" src="images/testimoni/<?=$r['gambar']?>" alt="<?=$data['title']?>">
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
        <div class="row album-gallery no-gutters mt-5">
            <div class="col-md-12 text-center">
                <h4>GALLERY</h4>
                <hr class="mb-4" style="width:200px; margin: auto;border-color:red;border-top:3px solid red" />
            </div>
            <?php $no=1;foreach($gallery as $r) : ?>
            <?php if($no == 1) : ?>
            <div class="col-md-12 col-12 g-full">
                <figure>
                    <a href="images/gallery/<?=$r['gambar']?>" data-gall="portfolioGallery" class="venobox preview-link"
                        title="<?=$r['nama']?>">
                        <picture>
                            <source media="(min-width: 651px)" srcset="images/gallery/<?=$r['gambar']?>">
                            <source media="(max-width: 650px)" srcset="images/gallery/<?=$r['gambar']?>">
                            <img class="w-100" src="images/gallery/<?=$r['gambar']?>" alt="<?=$data['title']?>">
                        </picture>
                    </a>
                </figure>
            </div>
            <?php elseif($no == 2) : ?>
            <div class="col-md-4 col-4">
                <div class="row">
                    <div class="col-md-12 g-common ">
                        <figure>
                            <a href="images/gallery/<?=$r['gambar']?>" data-gall="portfolioGallery"
                                class="venobox preview-link" title="<?=$r['nama']?>">
                                <picture>
                                    <source media="(min-width: 651px)" srcset="images/gallery/<?=$r['gambar']?>">
                                    <source media="(max-width: 650px)" srcset="images/gallery/<?=$r['gambar']?>">
                                    <img class="w-100" src="images/gallery/<?=$r['gambar']?>" alt="<?=$data['title']?>">
                                </picture>
                            </a>
                        </figure>
                    </div>
                    <?php elseif($no == 3) : ?>
                    <div class="col-md-12 g-common">
                        <figure>
                            <a href="images/gallery/<?=$r['gambar']?>" data-gall="portfolioGallery"
                                class="venobox preview-link" title="<?=$r['nama']?>">
                                <picture>
                                    <source media="(min-width: 651px)" srcset="images/gallery/<?=$r['gambar']?>">
                                    <source media="(max-width: 650px)" srcset="images/gallery/<?=$r['gambar']?>">
                                    <img class="w-100" src="images/gallery/<?=$r['gambar']?>" alt="<?=$data['title']?>">
                                </picture>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
            <?php elseif($no == 4) :  ?>
            <div class="col-md-8 col-8 g-medium">
                <figure>
                    <a href="images/gallery/<?=$r['gambar']?>" data-gall="portfolioGallery" class="venobox preview-link"
                        title="<?=$r['nama']?>">
                        <picture>
                            <source media="(min-width: 651px)" srcset="images/gallery/<?=$r['gambar']?>">
                            <source media="(max-width: 650px)" srcset="images/gallery/<?=$r['gambar']?>">
                            <img class="w-100" src="images/gallery/<?=$r['gambar']?>" alt="<?=$data['title']?>">
                        </picture>
                    </a>
                </figure>
            </div>
            <?php else : ?>
            <div class="col-md-4 col-4 g-common">
                <figure>
                    <a href="images/gallery/<?=$r['gambar']?>" data-gall="portfolioGallery" class="venobox preview-link"
                        title="<?=$r['nama']?>">
                        <picture>
                            <source media="(min-width: 651px)" srcset="images/gallery/<?=$r['gambar']?>">
                            <source media="(max-width: 650px)" srcset="images/gallery/<?=$r['gambar']?>">
                            <img class="w-100" src="images/gallery/<?=$r['gambar']?>" alt="<?=$data['title']?>">
                        </picture>
                    </a>
                </figure>
            </div>
            <?php endif; ?>
            <?php $no++;endforeach ?>
        </div>
    </div>
    </div>
</section>
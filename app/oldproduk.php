<?php $this->layout('template') ?>
<!-- About section  -->
<section class="container martop">
    <div class="row py-4">
        <div class="col-md-12">
            <h3><?=$judul?></h3>
            <hr>
        </div>
    </div>
    <div class="row mb-4">
        <?php foreach($produk as $r) : ?>
        <div class="col-md-3 col-6  mb-4">
            <div class="service-widget border">
                <div class="post-media wow fadeIn ww">
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
                <div class="row product-card-text no-gutters">
                    <a href="produk-<?=$r['judul_seo']."-".$r['id_produk']?>">
                        <p class=" product-card-name"
                            title="<?=$r['judul']?> "><?=$r['judul']?> </p>
                        <p style="height: 20px;" class="product-card-shop mt-2"> Rp <?=$r['harga']?></p>
                    </a>
                </div>
                <div class="product-card-text">
                    <!--<a href="produk-<?=$r['judul_seo']."-".$r['id_produk']?>" class="btn btn-danger btn-md btn-block"-->
                    <!--    item-id="52161">-->
                    <!--    Detail</a>-->
                </div>
            </div>
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
</section>
<?php $this->layout('template') ?>
<section class="bg-abu martop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Harga</h2>
                <p class="mb-0">Kapan lagi anda dapat memiliki jersey murah dan berkualitas</p>
                <hr>
            </div>
            <div class="col-md-12">
                <img src="images/<?=$data['gambar']?>" class="w-100" alt="<?=$data['title']?>">
                <div class="d-flex justify-content-center">
                    <a href="images/<?=$data['gambar']?>" download class="btn btn-danger mt-2"> <i
                            class="icofont-download"></i> Download</a>
                </div>
            </div>
        </div>
        <div class="row album-photos mt-5">
            <div class="col-md-12 text-center">
                <h4>Detail dan Jenis Bahan Jersey</h4>
                <hr class="mb-4" style="width:200px; margin: auto;border-color:red;border-top:3px solid red" />
            </div>
            <?php foreach($bahan as $r) : ?>
            <div class="col-md-6 col-12 mb-4">
                <a href="images/bahan/<?=$r['gambar']?>" data-gall="portfolioGallery" class="venobox preview-link"
                    title="<?=$r['nama']?>">
                    <picture>
                        <source media="(min-width: 651px)" srcset="images/bahan/<?=$r['gambar']?>">
                        <source media="(max-width: 650px)" srcset="images/bahan/<?=$r['gambar']?>">
                        <img class="w-100" src="images/bahan/<?=$r['gambar']?>" alt="<?=$data['title']?>">
                    </picture>
                </a>
                <h5 class="text-center mt-2"><?=$r['judul']?></h5>
                <div><?=$r['deskripsi']?></div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    </div>
</section>
<?php $this->layout('template') ?>
<style>
    .gambaru {
        height: auto !important;
    }
</style>
<section id="case" class="section wb martop " style="text-align: justify;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-4">
                <?php if(!empty($multi)) : ?>
                <ul class="pgwSlider">
                    <li><img src="images/produk/<?php echo $data['gambar'] ?>"></li>
                    <?php foreach($multi as $r) : ?>
                    <li><img src="images/gallery_produk/<?php echo $imgname1."-".$r['gambar'] ?>"></li>
                    <?php endforeach ?>
                </ul>
                <?php else : ?>
                <img src="images/produk/<?php echo $data['gambar'] ?>" class="w-100">
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <form action="cart" method="POST">
                    <div class="card">
                        <div class="card-body">
                            <h3 style="margin-top:10px; font-weight: bold;"><?php echo $data['judul'] ?></h3>

                            <h5 class="my-4">Rp <?=$data['harga']?></h5>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group row no-gutters">
                                        <label for="jumlah"
                                            class="col-sm-4 col-form-label col-form-label-sm">Jumlah</label>
                                        <div class="col-sm-5">
                                            <input type="number" class="form-control form-control-sm" id="jumlah"
                                                name="jumlah" min="0" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name='produk' value="produk">
                            <input type="hidden" name='id_produk' value="<?=$data['id_produk']?>">
                            <button id="keranjang" class="btn btn-success btn-block whatsapp"> <i
                                    class="icofont-plus"></i>
                                DROP YOUR REQUEST</button>

                            <!-- <a id="kirim-wa2" class="btn btn-success btn-block whatsapp"> <i class="icofont-whatsapp"></i>
                            ORDER VIA
                            WHATSAPP</a> -->
                            <?php if($data['tokopedia'] != '') : ?>
                            <a target="_blank" href="<?=$data['tokopedia']?>" class="btn btn-success btn-block tokped">
                                <img class="mr-1" src="images/tokped.png" alt="<?php echo $data['judul'] ?>"
                                    style="height: 20px;"> ORDER VIA TOKOPEDIA</a>
                            <?php endif; ?>
                            <?php if($data['bukalapak'] != '') : ?>
                            <a target="_blank" href="<?=$data['bukalapak']?>" class="btn btn-danger btn-block bl"> <img
                                    class="mr-1" src="images/buka.png" alt="<?php echo $data['judul'] ?>"
                                    style="height: 20px;"> ORDER VIA BUKALAPAK</a>
                            <?php endif; ?>
                            <?php if($data['shopee'] != '') : ?>
                            <a target="_blank" href="<?=$data['shopee']?>" class="btn btn-success btn-block shopee"><img
                                    class="mr-1" src="images/shopee.png" alt="<?php echo $data['judul'] ?>"
                                    style="height: 20px;">ORDER VIA SHOPEE</a>
                            <?php endif; ?>
                            <?php if($data['lazada'] != '') : ?>
                            <a target="_blank" href="<?=$data['lazada']?>" class="btn btn-primary btn-block lazada">
                                <img class="mr-1" src="images/lazada.png" alt="<?php echo $data['judul'] ?>"
                                    style="height: 20px;">ORDER VIA LAZADA</a>
                            <?php endif; ?>
                            <?php if($data['blibli'] != '') : ?>
                            <a target="_blank" href="<?=$data['blibli']?>" class="btn btn-info btn-block blibli"> <img
                                    class="mr-1" src="images/bli.png" alt="<?php echo $data['judul'] ?>"
                                    style="height: 20px;">ORDER VIA BLIBLI</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
                <div class="card my-4">
                    <div class="card-body d-flex justify-content-between">
                        <div>Share Via :</div>
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Deskripsi Produk</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active py-2 px-2" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <?php echo $data['deskripsi'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Produk Lainnya</h4>
                        <hr class="mb-4" style="width:200px; margin: auto;border-color:red;border-top:3px solid red" />
                    </div>
                </div>
                <div class="row">
                    <?php foreach($produk as $r) : ?>
                    <div class="col-md-3 col-6  mb-4">
                        <div class="service-widget border bg-white">
                            <div class="post-media wow fadeIn ww">
                                <a href="produk-<?=$r['judul_seo']."-".$r['id_produk']?>">
                                    <picture>
                                        <!--mobile-->
                                        <source media="(max-width: 600px)" srcset="images/produk/<?=$r['gambar']?>">
                                        <!--dektop-->
                                        <source media="(min-width: 768px)"
                                            srcset="images/produk/small/<?=$r['gambar']?>">
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
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59dc9d30b368b392"></script>
<script>
    // Tambah Ke Keranjang
    // document.getElementById("tbh-keranjang").addEventListener("click", function () {
    //     var checked = [...document.getElementsByName("ukuran")].some(c => c.checked);
    //     var checked2 = [...document.getElementsByName("warna")].some(c => c.checked);
    //     if (checked && checked2) {
    //         var ukuran = document.querySelector("input[name=ukuran]:checked").value;
    //         var warna = document.querySelector("input[name=warna]:checked").value;
    //         document.getElementById("creeper").value = 2;
    //         document.getElementById("formKeranjang").submit();
    //     } else {
    //         alert("Pilih Ukuran dan Warna Terlebih dahulu!");
    //         return false;
    //     }
    // });

    document.getElementById("kirim-wa2").addEventListener("click", function () {

        var jml = document.querySelector('#jumlah').value;
        if (jml) {
            var harga = "Rp <?=$data['harga']?>";
            var x = location.href;

            var text = "";
            var spasi = "\r\n\r\n";
            var pembuka = "Halo Rochester Jersey.. saya mau Order : " + spasi;
            var kata = pembuka + "-- <?= $data['judul']; ?>" + " Dengan Jumlah " + jml +
                " dan dengan Harga " + harga + spasi + "Link :" + x;
            text = window.encodeURIComponent(kata);
            window.open('https://api.whatsapp.com/send?phone=<?php echo $deskrip[7] ?>&text=' + text,
                '_blank');

            //location.href='home';
        } else {
            alert("Masukkan Jumlah produk terlebih dahulu");
            return false;
        }
    });
</script>
<?php $this->layout('template') ?>
<section class="bg-abu martop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Hubungi Kami</h2>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="mb-4">
                    <?=$data['deskripsi']?>
                </div>
                <div class="mb-4"><?=$deskrip[81]?></div>
                <h4>Jam Operasional Workshop</h4>
                <div class="mb-4 box-order">
                    <?=$data['keterangan']?>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h4>Video Workshop</h4>
                <hr class="mb-4" style="width:200px; margin: auto;border-color:red;border-top:3px solid red" />
            </div>
            <div class="col-md-12">
                <div class="mb-4">
                    <iframe width="100%" height="420"
                        src="https://www.youtube.com/embed/<?=youtube($video['deskripsi'])?>"
                        title="<?=$data['judul']?>" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
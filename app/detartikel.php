<?php $this->layout('template') ?>
<section id="case" class="section wb martop" style="text-align: justify;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img style="width:100%; margin-bottom: 20px;" src="images/artikel/<?php echo $data['gambar'] ?>" alt="">
                <h3 class="text-left" style="margin-top:10px; font-weight: bold;"><?php echo $data['judul'] ?></h3>
                <small style="margin-right:10px;font-size:14px"> <i class="icofont-calendar"></i> <?php echo tgl2($data['tgl']) ?>
                </small>
                <small style="margin-right:10px;font-size:14px"> <i class="icofont-eye-alt"></i> <?php echo $data['dilihat'] ?> </small>
                <div class="addthis_inline_share_toolbox"></div>
                <hr style="border-top: 5px solid #00a86b;margin-top:10px; margin-bottom: 20px;">
                <?php echo $data['deskripsi'] ?>
                <br>
                <hr>
                <br>
            </div>
            <div class="col-md-4">
                <div class="box-side">
                    <h3 class="text-left" style="font-weight: bold; ">Other News</h3>
                    <hr style="border-top: 5px solid #00a86b;margin-top:10px">
                    <?php foreach($artikel as $row) : ?>
                    <div class="row">
                        <div class="col-md-6 col-5">
                            <a href="artikel-<?php echo $row['judul_seo']."-".$row['id_artikel'] ?>">
                                <img src="images/artikel/small/<?php echo $row['gambar'] ?>"
                                    style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-6 col-7">
                            <a href="artikel-<?php echo $row['judul_seo']."-".$row['id_artikel'] ?>">
                                <h6 style="font-weight: bold;color:black;font-size:18px"><?php echo $row['judul'] ?></h6>
                            </a>
                            <!--
                            <small style="margin-right:10px"> <i class="fa fa-calendar"></i>
                                <?php echo tgl2($row['tgl']) ?> </small>
                                -->
                        </div>
                    </div>
                    <hr style="margin-bottom:10px">
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59dc9d30b368b392"></script>
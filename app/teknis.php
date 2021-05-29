<?php $this->layout('template') ?>
<!--Main Slider-->
<section>
    <ul class="slideria">
        <?php foreach($slider as $r) : ?>
        <li>
            <a href="#"><img src="images/slider/<?=$r['gambar']?>" ></a>
        </li>
        <?php endforeach ?>
    </ul>
</section>

<div class="page-header title-area style-1">

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <nav class="breadcrumb">
                        <a class="home" href="#"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>Kecamatan Tanjung Palas Tengah</span>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="blogspage secpadd">
    <div id="content" class="site-content single-right">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area blog-classic col-md-12 col-sm-12 col-xs-12">

                    <main id="main" class="site-main ">

                        <div class="fh-section-title clearfix  text-left style-1 mb-15">
                            <h2>Data Teknis Jalan Kecamatan Tanjung Palas Tengah</h2>
                        </div>

                        <table id="table-download" class="table table-bordered">
                            <thead>
                                <tr align="center" class="trhead">
                                    <th width="29">No.</th>
                                    <th width="352">Nama Data</th>
                                    <th width="239">Ukuran</th>
                                    <th width="339">Tanggal</th>
                                    <th width="341">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1;foreach($teknis as $r) : ?>
                                <tr>
                                    <td width="10%" style="text-align:center;"><?=$no?></td>
                                    <td width="45%" align="left"><?=$r['nama']?></td>
                                    <td width="10%"><label for="" class="label label-warning" style="font-size: 14px;"><?= getSize('images/teknis/'.$r['gambar']) ?> MB</label></td>
                                    <td width="10%"><?=tgl2($r['tgl'])?></td>
                                    <td width="25%">
                                        <a class="btn btn-primary" href="images/teknis/<?=$r['gambar']?>" download> <i class="fa fa-download"></i> Download</a>
                                        <a target="_blank" class="btn btn-warning" href="images/teknis/<?=$r['gambar']?>"><i class="fa fa-eye"></i> Tampilkan</a>
                                    </td>

                                </tr>
                                <?php $no++;endforeach ?>
                            </tbody>
                        </table>
                    </main>
                </div>

            </div>
        </div>
    </div>
</div>
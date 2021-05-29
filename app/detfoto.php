<?php $this->layout('template') ?>
<div class="page-header title-area style-1">
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <nav class="breadcrumb">
                        <a class="home" href="<?=$base_url?>"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span><?=$data['judul']?></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blogspage secpadd">
    <div id="content" class="site-content">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area blog-grid col-md-12">
                    <div class="fh-section-title clearfix  text-left style-1 mb-15">
                        <h2><?=$data['judul']?></h2>
                    </div>
                    <!-- <header class="entry-header">
                        <div class="entry-thumbnail"></div>
                        <div class="entry-meta">
                            <span class="meta posted-on">
                                <a href="#" rel="bookmark">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="entry-date published updated">Fotografer: <b>Humas DPRD</b></span>
                                </a>
                            </span>
                            <hr>
                        </div>
                    </header> -->
                    <main id="main" class="site-main row">
                        <div class="masonry popup-foto">
                            <div class="item">
                                <a href="images/foto/<?php echo $data['gambar'] ?>">
                                    <div class="item-wrap">
                                        <img src="images/foto/<?php echo $data['gambar'] ?>">
                                        <div class="item-shadow">
                                            <a href="images/foto/<?php echo $data['gambar'] ?>"
                                                class="icona">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php foreach($gallery as $r) : ?>
                            <div class="item">
                                <a href="images/gallery_foto/<?php echo $imgname1."-".$r['gambar'] ?>">
                                    <div class="item-wrap">
                                        <img src="images/gallery_foto/<?php echo $imgname1."-".$r['gambar'] ?>">
                                        <div class="item-shadow">
                                            <a href="images/gallery_foto/<?php echo $imgname1."-".$r['gambar'] ?>"
                                                class="icona">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </main>
                    <!-- #main -->
                    <footer class="entry-footer clearfix">
                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons " style="margin-bottom:20px"></div><!-- ShareThis END -->
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blogspage abu secpadd">
    <div id="content" class="site-content">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area blog-grid col-md-12">
                    <div class="fh-section-title clearfix  text-left style-1 mb-15">
                        <h2>Galeri Kegiatan Lainnya</h2>
                    </div>
                    <main id="main" class="site-main row">
                        <?php foreach($foto as $r) : ?>
                        <article class="blog-wrapper col-3 col-xs-12 col-md-4 col-sm-6">
                            <div class="kotak" style="background-color: white;">
                                <div class="entry-thumbnail">
                                    <a href="galeri-<?=$r['judul_seo']."-".$r['id_foto']?>">
                                        <div class="option-box link"><span class="icon fa fa-camera"></span>
                                        </div>
                                        <img width="100%" src="images/foto/<?=$r['gambar']?>" alt="<?=$r['judul']?>"><i
                                            class="fa fa-link" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="meta posted-on">
                                            <a href="#" rel="bookmark">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <span class="entry-date published updated"><?=tgl2($r['tgl'])?></span>
                                            </a>
                                        </span>
                                        <span class="meta cat-link">
                                            <a href="#" class="category-link"><i class="fa fa-tags"
                                                    aria-hidden="true"></i>Galeri</a>
                                        </span>
                                    </div>
                                    <h4 class="entry-title"><a
                                            href="galeri-<?=$r['judul_seo']."-".$r['id_foto']?>"><?=$r['judul']?></a>
                                    </h4>
                                </header>
                            </div>
                        </article>
                        <?php endforeach ?>
                    </main>
                    <!-- #main -->
                </div>
            </div>
        </div>
    </div>
</div>
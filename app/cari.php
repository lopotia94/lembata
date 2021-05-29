<?php $this->layout('template') ?>
<div class="page-header title-area style-1">
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <nav class="breadcrumb">
                        <a class="home" href="<?=$base_url?>"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>Pencarian : <?=$data?></span>
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
                        <h2>Hasil Pencarian</h2>
                    </div>
                    <main id="main" class="site-main row">
                        <?php if(!empty($cari) && !empty($cari2)) : ?>
                        <?php foreach($cari as $r) : ?>
                        <article class="blog-wrapper col-3 col-xs-12 col-md-4 col-sm-6">
                            <div class="kotak">
                                <div class="entry-thumbnail">
                                    <a href="berita-<?=$r['judul_seo']."-".$r['id_artikel']?>">
                                        <div class="option-box link"><span class="icon fa fa-newspaper-o"></span>
                                        </div>
                                        <img width="100%" src="images/artikel/<?=$r['gambar']?>"
                                            alt="<?=$r['judul']?>"><i class="fa fa-link" aria-hidden="true"></i>
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
                                            <a href="galeri" class="category-link"><i class="fa fa-tags"
                                                    aria-hidden="true"></i>berita</a>
                                        </span>
                                    </div>
                                    <h4 class="entry-title"><a
                                            href="berita-<?=$r['judul_seo']."-".$r['id_artikel']?>"><?=$r['judul']?></a>
                                    </h4>
                                </header>
                            </div>
                        </article>
                        <?php endforeach ?>
                        <?php foreach($cari2 as $r) : ?>
                        <article class="blog-wrapper col-3 col-xs-12 col-md-4 col-sm-6">
                            <div class="kotak">
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
                                            <a href="galeri" class="category-link"><i class="fa fa-tags"
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
                        <?php else : ?>
                            <div class="col-md-12">
                                <p>Data tidak ditemukan.</p>
                            </div>
                        <?php endif; ?>
                    </main>
                    <!-- #main -->
                </div>
            </div>
        </div>
    </div>
</div>
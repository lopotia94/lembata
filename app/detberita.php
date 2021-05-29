<?php $this->layout('template') ?>
<div class="page-header title-area style-1 hidden-xs">
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
    <div id="content" class="site-content single-right">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area single-post col-md-8 col-sm-12 col-xs-12">
                    <main id="main" class="site-main">
                        <article class="hentry">
                            <header class="entry-header" style="padding-top:15px;">
                                <div class="entry-meta">
                                    <h2 class="entry-title"><?=$data['judul']?></h2>
                                    <span class="meta posted-on">
                                        <a href="#" rel="bookmark">
                                            <i class="fa fa-clock-o hidden-xs" aria-hidden="true"></i>
                                            <span class="entry-date published updated"><?=tgl2($data['tgl'])?> | Dibaca
                                                : <?=$data['dilihat']?> Kali</span>
                                        </a>
                                    </span>
                                    <span class="meta cat-link">
                                        <a href="berita" class="category-link"><i class="fa fa-tags"
                                                aria-hidden="true"></i>Berita</a>
                                    </span>
                                </div>
                            </header>

                            <div class="entry-content no-title">
                                <div class="entry-thumbnail">
                                    <div class="entry-format format-">
                                        <img src="images/artikel/<?=$data['gambar']?>" alt="<?=$data['judul']?>" width="100%">
                                    </div>
                                </div>
                                <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons " style="margin-bottom:20px"></div><!-- ShareThis END -->
                                <div class="isiku">
                                    <?=$data['deskripsi']?>
                                </div>
                                <br>
                            </div>
                        </article>
                        <div id="comments" class="comments-area">
                        </div>
                    </main>
                </div>
                <aside id="primary-sidebar" class="widgets-area col-xs-12 col-sm-12 col-md-4">
                    <div class="factoryhub-widget">
                        <div id="related-posts-widget-2" class="widget related-posts-widget">
                            <div class="panel with-nav-tabs panel-primary">
                                <div class="panel-heading titleku">
                                    <div><i class="fa fa-newspaper-o"></i> Berita Lainnya</div>
                                </div>
                                <div class="panel-body">
                                    <?php foreach($artikel as $r) : ?>
                                    <div class="related-post ">
                                        <a class="widget-thumb"
                                            href="berita-<?=$r['judul_seo']."-".$r['id_artikel']?>"><img
                                                width="75"
                                                src="images/artikel/small/<?=$r['gambar']?>"
                                                alt="image" class="img-responsive img-rounded"></a>
                                        <div class="post-text">
                                            <a class="post-title" href="berita-<?=$r['judul_seo']."-".$r['id_artikel']?>"><?=$r['judul']?> </a>
                                            <span class="post-date">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i><?=tgl2($r['tgl'])?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
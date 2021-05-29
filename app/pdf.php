<?php $this->layout('template') ?>
<div class="page-header title-area style-1">

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <nav class="breadcrumb">
                        <a class="home" href="#"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span><?=$data['nama']?></span>
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
                        <p style="margin-bottom: 20px;"><?=$data['deskripsi']?></p>
                        <object type="application/pdf" data="images/<?=$tipe."/".$data['gambar']?>"
                            width="100%" height="700">
                        </object>

                    </main>
                </div>

            </div>
        </div>
    </div>
</div>
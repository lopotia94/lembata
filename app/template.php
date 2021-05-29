<?= $this->insert('stat')  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php include 'seo.php' ?>

    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="assets/vendor/css/bootstrap.css" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="assets/vendor/css/font-awesome.css" rel="stylesheet">
    <!-- flaticon css -->
    <link href="assets/vendor/css/flaticon.css" rel="stylesheet">
    <!-- factoryplus-icons css -->
    <link href="assets/vendor/css/factoryplus-icons.css" rel="stylesheet">
    <!-- animate css -->
    <link href="assets/vendor/css/animate.css" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="assets/vendor/css/owl.css" rel="stylesheet">
    <!-- fancybox css -->
    <link href="assets/vendor/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/vendor/css/hover.css" rel="stylesheet">
    <link href="assets/vendor/css/frontend.css" rel="stylesheet">
    <link href="assets/vendor/css/style.css?v<?=date('H:i:s')?>" rel="stylesheet">
    <!-- switcher css -->
    <link rel='stylesheet' id='factoryhub-color-switcher-css' href='assets/vendor/css/switcher/default.css' />
    <link href="assets/vendor/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css"
        integrity="sha512-nIm/JGUwrzblLex/meoxJSPdAKQOe2bLhnrZ81g5Jbh519z8GFJIWu87WAhBH+RAyGbM4+U3S2h+kL5JoV6/wA=="
        crossorigin="anonymous" />
    <link href="assets/admin/theme/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slippry/1.4.0/slippry.min.css"
        integrity="sha512-T+a5Aa01HOiiskCpZYtRZu69nfOIyhjrDn0PRClEQTDKZ16pcdvaU7KD1m0NrQIKn6LqUzY8tgLsfOVGiJs2Rg=="
        crossorigin="anonymous" />
    <?=$deskrip[84]?>
    <style>
        .main-nav ul .pi {
            width: 290px;
        }
    </style>
</head>

<body>
    <div id="page" class="page-wrapper header-sticky header-v1 hide-topbar-mobile header-sticky">

        <!-- topbar -->
        <div id="topbar" class="topbar">
            <div class="container">
                <div class="row">

                    <div class="topbar-left topbar-widgets text-left col-md-7 col-sm-12 col-xs-12">
                        <div id="text-4" class="widget widget_text f12">
                            <div class="textwidget"><i class="fa fa-send" aria-hidden="true"></i><?=$deskrip[2]?>
                            </div>
                        </div>
                    </div>

                    <div class="topbar-right topbar-widgets text-right col-md-5 col-sm-12 col-xs-12">
                        <div id="text-7" class="widget widget_text">
                            <div class="textwidget">
                                <ul class="topbar-socials">
                                    <li><a target="_blank" href="<?=$sosmed[0]['link']?>"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a target="_blank" href="<?=$sosmed[1]['link']?>"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a target="_blank" href="<?=$sosmed[3]['link']?>"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                    <li><a target="_blank" href="<?=$sosmed[2]['link']?>"><i class="fa fa-youtube-play"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="search-3" class="widget widget_search">
                            <form action="cari" role="search" method="post" class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input class="search-field" placeholder="Pencarian …" value="" name="cari"
                                        type="search">
                                </label>
                                <input class="search-submit" value="Search" type="submit">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="fh-header-minimized" class="fh-header-minimized fh-header-v1" style="height: 75px;"></div>
        <!-- topbar end -->

        <!-- masthead -->
        <header id="masthead" class="site-header clearfix">
            <div class="header-main clearfix">
                <div class="site-contact">
                    <div class="container">
                        <div class="row">
                            <div class="site-logo col-md-4 col-sm-8 col-xs-8">
                                <a href="<?=$base_url?>" class="logo">
                                    <img src="images/<?=$deskrip[1]?>" alt="Logo DPRD" class="logo-dark show-logo">
                                </a>
                                <h1 class="site-title"><a href="#" rel="home">DPUPR</a></h1>
                                <h2 class="site-description">Kabupaten Bulungan</h2>
                            </div>
                            <div class="site-extra-text col-md-8 col-sm-6 col-xs-6">
                                <div class="extra-item item-text">
                                    <div class="style-2">
                                        <div class="location item-2">
                                            <i class="flaticon-pin"></i>
                                            <div>
                                                <span>Alamat :</span> <?=$deskrip[3]?>
                                            </div>
                                        </div>
                                        <div class="opening item-2">
                                            <i class="flaticon-technology-1"></i>
                                            <div>
                                                <span>Telepon :</span> <?=$deskrip[10]?>
                                            </div>
                                        </div>


                                        <!-- <div class="contact item-2">
                                            <i class="flaticon-web"></i>
                                            <div>
                                                <span>Email:</span> bulungan@gmail.com
                                            </div>
                                        </div> -->

                                        <div class="item-button">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-menu">
                    <div class="container">
                        <div class="row">
                            <div class="site-nav col-sm-12 col-xs-12 col-md-12">
                                <div class="navbar-toggle toggle-navs">
                                    <a href="#" class="navbars-icon">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <nav id="site-navigation"
                                    class="main-nav primary-nav nav">
                                    <ul class="menu">
                                        <li class=""><a href="<?=$base_url?>">
                                                <i class="fa fa-home" aria-hidden="true"></i> HOME</a>
                                        </li>
                                        <li class="">
                                            <a href="galeri"> GALERI</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle" href="#">DOKUMEN </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="sk-jalan">SK JALAN KABUPATEN</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-toggle" href="#">DATA TEKNIS JALAN </a>
                                                    <ul class="sub-menu pi">
                                                        <li>
                                                            <a href="kecamatan-tanjung-selor">KEC. TANJUNG SELOR</a>
                                                        </li>
                                                        <li>
                                                            <a href="kecamatan-tanjung-palas-tengah">KEC. TANJUNG PALAS TENGAH</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="dropdown-toggle" href="#">INFORMASI </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="kegiatan">KEGIATAN YANG DILAKSANAKAN TAHUN BERJALAN</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- masthead end -->

        <?= $this->section('content')?>

        <!--footer sec-->
        <div id="footer-widgets" class="footer-widgets widgets-area">
            <div class="container">
                <div class="row">
                    <div class="footer-sidebar footer-1 col-xs-12 col-sm-6 col-md-3">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="widget-title">KONTAK</h4>
                            <div class="menu-service-menu-container">
                                <?=$deskrip[80]?>
                            </div>
                        </div>
                    </div>
                    <div class="footer-sidebar footer-2 col-xs-12 col-sm-6 col-md-3">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="widget-title">MAPS</h4>
                            <div class="menu-service-menu-container">
                                <?=$deskrip[81]?>
                            </div>
                        </div>
                    </div>
                    <div class="footer-sidebar footer-3 col-xs-12 col-sm-6 col-md-3">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="widget-title">QUICK LINK</h4>
                            <div class="menu-service-menu-container">
                                <ul id="menu-service-menu" class="menu">
                                    <li><a href="<?=$base_url?>">
                                            Home</a></li>

                                    <li><a href="galeri">
                                            Galeri</a></li>

                                    <li><a href="sk-jalan">
                                            SK Jalan Kabupaten</a></li>

                                    <li><a href="data-teknis">
                                            Data Teknis Jalan</a></li>

                                    <li><a href="kegiatan">
                                            Kegiatan yang Dilaksanakan Tahun Berjalan</a></li>

                                    <li><a href="berita">
                                            Berita</a></li>


                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="footer-sidebar footer-4 col-xs-12 col-sm-6 col-md-3">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="widget-title">STATISTIK</h4>
                            <div class="menu-service-menu-container">
                                <p><i class="fa fa-certificate "></i> Hits Hari Ini : <?=$stat['hits']?></p>
                                <p><i class="fa fa-star "></i> Total Hits : <?=$stat['totalhits']?></p>
                                <p><i class="fa fa-user "></i> Pengunjung Hari Ini : <?=$stat['pengunjung']?></p>
                                <p><i class="fa fa-user-circle-o "></i> Pengunjung Online : <?=$stat['online']?></p>
                                <p><i class="fa fa-users "></i> Total Pengunjung : <?=$stat['totalpengunjung']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer sec end-->

        <!--copyright sec-->
        <footer id="colophon" class="site-footer f12">
            <div class="container">
                <div class="row">
                    <div class="footer-copyright col-md-8 col-sm-12 col-sx-12">
                        <div class="site-info">
                            Copyright @ 2021 <a href="#"> DPUPR Kabupaten Bulungan</a>, All
                            Right Reserved </div>
                        <!-- .site-info -->
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 text-right">
                        <div class="socials footer-social">
                            <a href="<?=$sosmed[0]['link']?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="<?=$sosmed[1]['link']?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="<?=$sosmed[3]['link']?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="<?=$sosmed[2]['link']?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--copyright sec end-->
    </div>
    <!--End pagewrapper-->
    

    <!--primary-mobile-nav-->
    <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
        <a href="#" class="close-canvas-mobile-panel">×</a>
        <ul class="menu">
            <li>
                <a href="<?=$base_url?>">Home</a>
            </li>
            <li>
                <a href="galeri">Galeri</a>
            </li>

            <li class="menu-item-has-children">
                <a class="dropdown-toggle" href="#">
                    Dokumen </a>
                <ul class="sub-menu">
                    <li><a href="sk-jalan">
                            SK Jalan Kabupaten</a></li>
                    <li class="menu-item-has-children">
                        <a class="dropdown-toggle" href="#">
                            Data Teknis Jalan </a>
                        <ul class="sub-menu">
                            <li><a href="kecamatan-tanjung-selor">
                                    Kec. Tanjung Selor</a></li>
                            <li><a href="kecamatan-tanjung-palas-tengah">
                                    Kec. Tanjung Palas Tengah</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a class="dropdown-toggle" href="#">
                    Informasi </a>
                <ul class="sub-menu">
                    <li><a href="kegiatan">
                            Kegiatan yang Dilaksanakan Tahun Berjalan</a></li>
                </ul>
            </li>

        </ul>

        <!-- <div class="extra-item menu-item-text"><i class="flaticon-technology-1"></i>
            <div class="extra-text">
                <p class="fh-text">Kontak</p>
                <p class="number">+0766-21080</p>
            </div>
        </div> -->
    </div>
    <div id="off-canvas-layer" class="off-canvas-layer"></div>
    <!--primary-mobile-nav end-->


    <div class="scroll-to-top scroll-to-target" data-target=".site-header"><span
            class="icon fa fa-long-arrow-up"></span></div>



    <!-- jquery Liabrary -->
    <script src="assets/vendor/js/jquery-1.12.4.min.js"></script>
    <!-- bootstrap v3.3.6 js -->
    <script src="assets/vendor/js/bootstrap.min.js"></script>
    <!-- fancybox js -->
    <script src="assets/vendor/js/jquery.fancybox.pack.js"></script>
    <script src="assets/vendor/js/jquery.fancybox-media.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/vendor/js/owl.js"></script>
    <!-- counter js -->
    <script src="assets/vendor/js/jquery.appear.js"></script>
    <script src="assets/vendor/js/jquery.countTo.js"></script>
    <!-- validate js -->
    <script src="assets/vendor/js/validate.js"></script>
    <!-- switcher js -->

    <!-- script JS  -->
    <script src="assets/vendor/js/scripts.min.js?v"></script>
    <script src="assets/vendor/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"
        integrity="sha512-+m6t3R87+6LdtYiCzRhC5+E0l4VQ9qIT1H9+t1wmHkMJvvUQNI5MKKb7b08WL4Kgp9K0IBgHDSLCRJk05cFUYg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.0.0/masonry.pkgd.min.js"
        integrity="sha512-MMJUUUlAjU0871LDqmZTmuJpNrnoFQN+nc2hnM6yswNN//0t+jZD/iZz3LQKqtyA5aLysy/AGrG7ZkmKg5UmiQ=="
        crossorigin="anonymous"></script>
    <script src="assets/admin/theme/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slippry/1.4.0/slippry.min.js"
        integrity="sha512-AuA2kbI9ByrbsuXrrdqY8qlayz6cFSwLl7qvLBQSMJIWJ5YFjBRKrtVWD3NKWZHOcxqpnqYJtcLaZARXxR+Kjg=="
        crossorigin="anonymous"></script>
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=5faccee8c715b900122c0411&product=inline-share-buttons'
        async='async'></script>
    <script>
        //MASONRY GALLERY
        // $('.masonry-photo').lightGallery({
        // });
        $('#masonry').masonry({
            // options
            itemSelector: '.gallery-item'
        });
        $('.popup-foto').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image'
        });
        $('#table-download').DataTable({
            "responsive": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
        });
        jQuery(document).ready(function () {
            jQuery('.slideria').slippry({
                pager: false
            })
        });
    </script>
    <?=$deskrip[85]?>
</body>

</html>
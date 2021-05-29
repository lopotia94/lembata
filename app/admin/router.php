<?php
/*
 * ------------------------------------------------------
 *  Router Admin
 * ------------------------------------------------------
 */

$path = APPPATH . ADMPATH . 'modul/';

$router->get("/$_ENV[URL_LOGIN]", function () use ($login) {
    echo $login->render('login');
});

$router->post("/$_ENV[URL_LOGIN]", function () use ($login, $jmw, $db) {
    $username = $_POST['username'];
    $pass = md5($_POST['password']);
    $login = $db->read("admin", "*", "username='$username' AND password='$pass' AND status='Aktif'")->fetch();
    $ketemu = $db->read("admin", "COUNT(*)", "username='$username' AND password='$pass' AND status='Aktif'")->fetchColumn();
    $r = $login;
    if ($ketemu > 0) {
        $_SESSION['nama_admin']         = $r['username'];
        $_SESSION['email_admin']        = $r['email'];
        $_SESSION['namalengkapadmin']   = $r['nama_lengkap'];
        $_SESSION['passadmin']          = $r['password'];
        $_SESSION['leveladmin']         = $r['level'];
        $_SESSION['id_admin']           = $r['id'];
        $_SESSION['idsession']          = $r['id_session'];
        $_SESSION['halaman']            = 'Home';
        $_SESSION['IsAuthorized']       = true;
        header("location: ../$_ENV[URL_ADMIN]/dashboard");
    } else {
        header("location: ../$_ENV[URL_LOGIN]");
    }
});

/** Cek Keamanan **/
$router->before('GET|POST', "/$_ENV[URL_ADMIN]/.*", function () {
    if (!isset($_SESSION['nama_admin'])) {
            $getWholeUrl = "http://" . $_SERVER['HTTP_HOST'] . "" . $_SERVER['REQUEST_URI'] . "";
            if (substr($getWholeUrl, -1) == '/') {
                header("location: ../$_ENV[URL_LOGIN]");
            } else {
                header("location: ../$_ENV[URL_LOGIN]");
            }
        exit();
    } 
});



/** Router dalam folder Admin **/
$router->mount("/$_ENV[URL_ADMIN]", function () use ($router, $db, $jmw, $path,$imgname1,$msg) {

    /** Security Lvl 2 **/
    $router->get('/', function () {
        if (!isset($_SESSION['nama_admin'])) {
            header("location: $_ENV[URL_LOGIN]");
            exit();
        } else {
            $getWholeUrl = "http://" . $_SERVER['HTTP_HOST'] . "" . $_SERVER['REQUEST_URI'] . "";
            if (substr($getWholeUrl, -1) == '/') {
                header('location: dashboard');
            } else {
                header('location: ' . ADMPATH . 'dashboard');
            }

        }

    });

    /** Logout **/
    $router->get('/logout', function () use ($jmw, $db, $path) {
        session_start();
        session_destroy();
        header("location: ../$_ENV[URL_LOGIN]");
    });

    /** Url Setting **/
    $router->get('/setting', function () use ($jmw, $db, $path) {
        $data = $db->connection("SELECT * FROM admin WHERE id = $_SESSION[id_admin] ")->fetch();
        echo $jmw->render('modul/admin/index', ['act' => 'edit', 'tedit' => $data]);
    });

    /** Setting Updated **/
    $router->post('/setting', function () use ($jmw, $db, $path) {
        $act = "update";
        $hal = "setting";
        include ($path . 'admin/aksi.php');
    });

    /** Setting File Manager **/
    $router->get('/file-manager', function () use ($jmw, $db, $path) {
        echo $jmw->render('modul/filemanager/index');
    });

/*
 * ------------------------------------------------------
 *  Router Dashboard
 * ------------------------------------------------------
 */

    /** Halaman Dashboard **/
    $router->get('/dashboard', function () use ($jmw, $db) {

        $tanggal = date("Y-m-d"); // Mendapatkan tanggal sekarang
        $bataswaktu = time() - 300;

        $pengunjung = $db->connection("SELECT COUNT(*) FROM statistik WHERE tanggal='$tanggal' GROUP BY ip ASC")->fetchColumn();
        $totalpengunjung = $db->connection("SELECT COUNT(hits) as totalz FROM statistik")->fetch();
        $pengunjungonline = $db->connection("SELECT hits FROM statistik WHERE tanggal='$tanggal' AND online > '$bataswaktu' GROUP BY tanggal ASC")->rowCount();
        $totalhits = $db->connection("SELECT SUM(hits) as totalz FROM statistik")->rowCount();
        $hits = $db->connection("SELECT SUM(hits) FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal DESC LIMIT 1")->fetchColumn();

        echo $jmw->render('dashboard', ['pengunjung' => $pengunjung, 'totalpengunjung' => $totalpengunjung, 'pengunjungonline' => $pengunjungonline, 'totalhits' => $totalhits, 'hits' => $hits]);
    });


/*
 * ------------------------------------------------------
 *  Router Page
 * ------------------------------------------------------
 */

    /** Url Home SEO **/
    $router->get('/home', function () use ($jmw, $db, $path) {
        $data = $db->connection("SELECT * FROM page WHERE id_page = 0 ")->fetch();
        echo $jmw->render('modul/page/index', ['act' => 'edit', 'row' => $data]);
    });

    /** Url Page **/
    $router->get('/page-edit-(\d+)', function ($id) use ($jmw, $db,$msg) {
        $data = $db->connection("SELECT * FROM page WHERE id_page = $id ")->fetch();
        echo $jmw->render('modul/page/index', ['act' => 'edit', 'row' => $data]);
    });

    /** Update Page **/
    $router->post('/page', function () use ($jmw, $db, $path,$msg) {
        $id  = $_POST['id_page'];
        $act = "update";
        if($id == 0){$hal = "home";}
        elseif($id == 13){$hal = "quote";}
        elseif($id == 3){$hal = "prakata";}
        elseif($id == 14){$hal = "profile-video";}
        elseif($id == 8){$hal = "kontak";}
        
        include ('modul/page/aksi.php');
        
    });

/*
 * ------------------------------------------------------
 *  Router Module
 * ------------------------------------------------------
 */

    /** Url Module **/
    $router->get('/module', function () use ($jmw, $db,$path) {
        $data = $db->connection("SELECT * FROM modul WHERE tampil='Ya' ORDER BY no_urut ASC");
        echo $jmw->render('modul/modul/index', ['act' => 'list', 'tampil' => $data]);
    });

    /** Edit Module **/
    $router->get('/module-edit-(\d+)', function ($id) use ($jmw, $db,$path) {
        $edit = $db->connection("SELECT * FROM modul WHERE id_modul= $id ");
        echo $jmw->render('modul/modul/index', ['act' => 'edit', 'edit' => $edit]);
    });

    /** Update Module **/
    $router->post('/module', function () use ($jmw, $db, $path,$msg) {
        $act = "update";
        $hal = "module";
        include ('modul/modul/aksi.php');
    });


/*
 * ------------------------------------------------------
 *  Router Sosial Media
 * ------------------------------------------------------
 */

    /** Url Module **/
    $router->get('/social-media', function () use ($jmw, $db,$path) {
        $data = $db->connection("SELECT * FROM social_media  WHERE status ='on' ");
        echo $jmw->render('modul/social_media/index', ['act' => 'list', 'tampil' => $data]);
    });

    /** Edit Module **/
    $router->get('/social-media-edit-(\d+)', function ($id) use ($jmw, $db,$path) {
        $edit = $db->connection("SELECT * FROM social_media WHERE id_social_media= $id ")->fetch();
        echo $jmw->render('modul/social_media/index', ['act' => 'edit', 'data' => $edit]);
    });

    /** Update Module **/
    $router->post('/social-media', function () use ($jmw, $db, $path) {
        $act = "update";
        $hal = "social-media";
        include ('modul/social_media/aksi.php');
    });

/*
 * ------------------------------------------------------
 *  Router Foto
 * ------------------------------------------------------
 */

    /** Url foto **/
    $router->get('/foto', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM foto ORDER BY tgl ASC");
        echo $jmw->render('modul/foto/index', ['act' => 'list', 'tampil' => $dataku]);
    });

    /** Show Add Form foto **/
    $router->get('/foto-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/foto/index', ['act' => 'add']);
    });

    /** Show Edit Form foto **/
    $router->get('/foto-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data    = $db->connection("SELECT * FROM foto WHERE id_foto = $id ")->fetch();
        $gallery = $db->connection("SELECT * FROM gallery_foto WHERE id_foto='$data[id_foto]' ORDER BY id_gallery ASC")->fetchAll();
        echo $jmw->render('modul/foto/index', ['act' => 'edit', 'data' => $data,'gallery' => $gallery]);
    });

    /** Update dan Add foto  **/
    $router->post('/foto', function () use ($jmw, $db, $path) {
        if (isset($_POST['id_foto'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "foto";
        include ($path . 'foto/aksi.php');
    });

    /** Delete foto **/
    $router->get('/foto-delete-(\d+)', function ($id) use ($jmw, $db, $path) {
        $act = "remove";
        $hal = "foto";
        include ($path . 'foto/aksi.php');
    });


    /** Show Add Form Gallery foto **/
    $router->get('/foto-addgallery-(\d+)', function ($id) use ($jmw, $db) {
        echo $jmw->render('modul/foto/index', ['act' => 'addgallery', 'id' => $id]);
    });


    /** Show Edit Form  Gallery foto **/
    $router->get('/foto-editgallery-(\d+)', function ($id) use ($jmw, $db) {
        $data    = $db->connection("SELECT * FROM gallery_foto WHERE id_gallery = $id ")->fetch();
        echo $jmw->render('modul/foto/index', ['act' => 'editgallery', 'data' => $data]);
    });


    /** Update dan Add  Gallery foto  **/
    $router->post('/foto-gallery', function () use ($jmw, $db, $path) {
        if (isset($_POST['id'])) {
            $act = "editgallery";
        } else {
            $act = "addgallery";
        }
        $hal = "foto";
        include ($path . 'foto/aksi.php');
    });


    /** Delete Gallery foto **/
    $router->get('/foto-gallery-delete-(\d+)-(\d+)', function ($id,$id_foto) use ($jmw, $db, $path,$imgname1) {
        $act = "removegallery";
        $hal = "foto";
        include ($path . 'foto/aksi.php');
    });
    
/*
 * ------------------------------------------------------
 *  Router Video
 * ------------------------------------------------------
 */

    /** Url video **/
    $router->get('/video', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM banner")->fetchAll();
        echo $jmw->render('modul/banner/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form video **/
    $router->get('/video-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/banner/index', ['act' => 'add']);
    });

    /** Show Edit Form video **/
    $router->get('/video-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM banner WHERE id_banner = $id ")->fetch();
        echo $jmw->render('modul/banner/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add video  **/
    $router->post('/video', function () use ($jmw, $db, $path) {
        if (isset($_POST['id_banner'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "video";
        include ($path . 'banner/aksi.php');
    });

    /** Delete video **/
    $router->get('/video-delete-(\d+)', function ($id) use ($jmw, $db, $path) {
        $act = "remove";
        $hal = "video";
        include ($path . 'banner/aksi.php');
    });

/*
 * ------------------------------------------------------
 *  Router Transportasi
 * ------------------------------------------------------
 */

    /** Url Transportasi **/
    $router->get('/transportasi', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM transportasi")->fetchAll();
        echo $jmw->render('modul/transportasi/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form Transportasi **/
    $router->get('/transportasi-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/transportasi/index', ['act' => 'add']);
    });

    /** Show Edit Form Transportasi **/
    $router->get('/transportasi-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM transportasi WHERE id_transportasi = $id ")->fetch();
        echo $jmw->render('modul/transportasi/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add Transportasi  **/
    $router->post('/transportasi', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_transportasi'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "transportasi";
        include ($path . 'transportasi/aksi.php');
    });

    /** Delete Transportasi **/
    $router->get('/transportasi-delete-(\d+)', function ($id) use ($jmw, $db, $path) {
        $act = "remove";
        $hal = "transportasi";
        include ($path . 'transportasi/aksi.php');
    });


/*
 * ------------------------------------------------------
 *  Router bahan
 * ------------------------------------------------------
 */

    /** Url bahan **/
    $router->get('/bahan', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM bahan")->fetchAll();
        echo $jmw->render('modul/bahan/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form bahan **/
    $router->get('/bahan-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/bahan/index', ['act' => 'add']);
    });

    /** Show Edit Form bahan **/
    $router->get('/bahan-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM bahan WHERE id_bahan = $id ")->fetch();
        echo $jmw->render('modul/bahan/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add bahan  **/
    $router->post('/bahan', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_bahan'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "bahan";
        include ($path . 'bahan/aksi.php');
    });

    /** Delete bahan **/
    $router->get('/bahan-delete-(\d+)', function ($id) use ($jmw, $db, $path) {
        $act = "remove";
        $hal = "bahan";
        include ($path . 'bahan/aksi.php');
    });


/*
 * ------------------------------------------------------
 *  Router Produk
 * ------------------------------------------------------
 */

    /** Url produk **/
    $router->get('/produk', function () use ($jmw, $db,$msg) {
        $dataku = $db->connection("SELECT * FROM produk  ORDER BY tgl ASC");
        
        echo $jmw->render('modul/produk/index', ['act' => 'list', 'tampil' => $dataku]);
    });

    /** Show Add Form produk **/
    $router->get('/produk-add', function () use ($jmw, $db,$msg) {
        $kategori = $db->connection("SELECT * FROM produk_kategori ")->fetchAll();
        echo $jmw->render('modul/produk/index', ['act' => 'add','kategori' => $kategori]);
    });

    /** Show Edit Form produk **/
    $router->get('/produk-edit-(\d+)', function ($id) use ($jmw, $db,$msg) {
        $data    = $db->connection("SELECT * FROM produk WHERE id_produk = $id ")->fetch();
        $gallery = $db->connection("SELECT * FROM gallery_produk WHERE id_produk='$data[id_produk]' ORDER BY id_gallery ASC")->fetchAll();
        $kategori = $db->connection("SELECT * FROM produk_kategori ")->fetchAll();
        echo $jmw->render('modul/produk/index', ['act' => 'edit', 'data' => $data,'gallery' => $gallery,'kategori' => $kategori]);
    });

    /** Update dan Add produk  **/
    $router->post('/produk', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_produk'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "produk";
        include ($path . 'produk/aksi.php');
    });

    /** Delete produk **/
    $router->get('/produk-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "produk";
        include ($path . 'produk/aksi.php');
    });


    /** Show Add Form Gallery Produk **/
    $router->get('/produk-addgallery-(\d+)', function ($id) use ($jmw, $db,$msg) {
        echo $jmw->render('modul/produk/index', ['act' => 'addgallery', 'id' => $id]);
    });


    /** Show Edit Form  Gallery Produk **/
    $router->get('/produk-editgallery-(\d+)', function ($id) use ($jmw, $db,$msg) {
        $data    = $db->connection("SELECT * FROM gallery_produk WHERE id_gallery = $id ")->fetch();
        echo $jmw->render('modul/produk/index', ['act' => 'editgallery', 'data' => $data]);
    });


    /** Update dan Add  Gallery Produk  **/
    $router->post('/produk-gallery', function () use ($jmw, $db, $path,$msg,$imgname1) {
        if (isset($_POST['id'])) {
            $act = "editgallery";
        } else {
            $act = "addgallery";
        }
        $hal = "produk";
        include ($path . 'produk/aksi.php');
    });


    /** Delete Gallery Produk **/
    $router->get('/produk-gallery-delete-(\d+)-(\d+)', function ($id,$id_produk) use ($jmw, $db, $path,$imgname1,$msg) {
        $act = "removegallery";
        $hal = "produk";
        include ($path . 'produk/aksi.php');
    });


    

/*
 * ------------------------------------------------------
 *  Router Slider
 * ------------------------------------------------------
 */

    /** Url slider **/
    $router->get('/slider', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM slider")->fetchAll();
        echo $jmw->render('modul/slider/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form slider **/
    $router->get('/slider-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/slider/index', ['act' => 'add']);
    });

    /** Show Edit Form slider **/
    $router->get('/slider-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM slider WHERE id_slider = $id ")->fetch();
        echo $jmw->render('modul/slider/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add slider  **/
    $router->post('/slider', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_slider'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "slider";
        include ($path . 'slider/aksi.php');
    });

    /** Delete slider **/
    $router->get('/slider-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "slider";
        include ($path . 'slider/aksi.php');
    });
    
/*
 * ------------------------------------------------------
 *  Router Gallery
 * ------------------------------------------------------
 */

    /** Url gallery **/
    $router->get('/gallery', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM gallery")->fetchAll();
        echo $jmw->render('modul/gallery/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form gallery **/
    $router->get('/gallery-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/gallery/index', ['act' => 'add']);
    });

    /** Show Edit Form gallery **/
    $router->get('/gallery-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM gallery WHERE id_gallery = $id ")->fetch();
        echo $jmw->render('modul/gallery/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add gallery  **/
    $router->post('/gallery', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_gallery'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "gallery";
        include ($path . 'gallery/aksi.php');
    });

    /** Delete gallery **/
    $router->get('/gallery-delete-(\d+)', function ($id) use ($jmw, $db, $path ,$msg) {
        $act = "remove";
        $hal = "gallery";
        include ($path . 'gallery/aksi.php');
    });

/*
 * ------------------------------------------------------
 *  Router listproject
 * ------------------------------------------------------
 */

    /** Url listproject **/
    $router->get('listproject', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM listproject");
        echo $jmw->render('modul/listproject/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form listproject **/
    $router->get('listproject-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/listproject/index', ['act' => 'add']);
    });

    /** Show Edit Form listproject **/
    $router->get('listproject-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM listproject WHERE id_listproject = $id ")->fetch();
        echo $jmw->render('modul/listproject/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add listproject  **/
    $router->post('listproject', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_listproject'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "listproject";
        include ($path . 'listproject/aksi.php');
    });

    /** Delete listproject **/
    $router->get('listproject-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "listproject";
        include ($path . 'listproject/aksi.php');
    });

/*
 * ------------------------------------------------------
 *  Router produk_kategori
 * ------------------------------------------------------
 */

    /** Url produk_kategori **/
    $router->get('produk-kategori', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM produk_kategori");
        echo $jmw->render('modul/produk_kategori/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form produk_kategori **/
    $router->get('produk-kategori-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/produk_kategori/index', ['act' => 'add']);
    });

    /** Show Edit Form produk_kategori **/
    $router->get('produk-kategori-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM produk_kategori WHERE id_produk_kategori = $id ")->fetch();
        echo $jmw->render('modul/produk_kategori/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add produk_kategori  **/
    $router->post('produk-kategori', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_produk_kategori'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "produk-kategori";
        include ($path . 'produk_kategori/aksi.php');
    });

    /** Delete produk_kategori **/
    $router->get('produk-kategori-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "produk-kategori";
        include ($path . 'produk_kategori/aksi.php');
    });

/*
 * ------------------------------------------------------
 *  Router sizechart
 * ------------------------------------------------------
 */

    /** Url sizechart **/
    $router->get('/sizechart', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM sizechart")->fetchAll();
        echo $jmw->render('modul/sizechart/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form sizechart **/
    $router->get('/sizechart-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/sizechart/index', ['act' => 'add']);
    });

    /** Show Edit Form sizechart **/
    $router->get('/sizechart-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM sizechart WHERE id_sizechart = $id ")->fetch();
        echo $jmw->render('modul/sizechart/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add sizechart  **/
    $router->post('/sizechart', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_sizechart'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "sizechart";
        include ($path . 'sizechart/aksi.php');
    });

    /** Delete sizechart **/
    $router->get('/sizechart-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "sizechart";
        include ($path . 'sizechart/aksi.php');
    });
  

/*
 * ------------------------------------------------------
 *  Router teknis
 * ------------------------------------------------------
 */

    /** Url teknis **/
    $router->get('/teknis', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM teknis")->fetchAll();
        echo $jmw->render('modul/teknis/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form teknis **/
    $router->get('/teknis-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/teknis/index', ['act' => 'add']);
    });

    /** Show Edit Form teknis **/
    $router->get('/teknis-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM teknis WHERE id_teknis = $id ")->fetch();
        echo $jmw->render('modul/teknis/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add teknis  **/
    $router->post('/teknis', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_teknis'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "teknis";
        include ($path . 'teknis/aksi.php');
    });

    /** Delete teknis **/
    $router->get('/teknis-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "teknis";
        include ($path . 'teknis/aksi.php');
    });
  
/*
 * ------------------------------------------------------
 *  Router selor
 * ------------------------------------------------------
 */

    /** Url selor **/
    $router->get('/selor', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM selor")->fetchAll();
        echo $jmw->render('modul/selor/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form selor **/
    $router->get('/selor-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/selor/index', ['act' => 'add']);
    });

    /** Show Edit Form selor **/
    $router->get('/selor-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM selor WHERE id_selor = $id ")->fetch();
        echo $jmw->render('modul/selor/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add selor  **/
    $router->post('/selor', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_selor'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "selor";
        include ($path . 'selor/aksi.php');
    });

    /** Delete selor **/
    $router->get('/selor-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "selor";
        include ($path . 'selor/aksi.php');
    });
    
/*
 * ------------------------------------------------------
 *  Router kegiatan
 * ------------------------------------------------------
 */

    /** Url kegiatan **/
    $router->get('/kegiatan', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM kegiatan")->fetchAll();
        echo $jmw->render('modul/kegiatan/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form kegiatan **/
    $router->get('/kegiatan-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/kegiatan/index', ['act' => 'add']);
    });

    /** Show Edit Form kegiatan **/
    $router->get('/kegiatan-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM kegiatan WHERE id_kegiatan = $id ")->fetch();
        echo $jmw->render('modul/kegiatan/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add kegiatan  **/
    $router->post('/kegiatan', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_kegiatan'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "kegiatan";
        include ($path . 'kegiatan/aksi.php');
    });

    /** Delete kegiatan **/
    $router->get('/kegiatan-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "kegiatan";
        include ($path . 'kegiatan/aksi.php');
    });
    
/*
 * ------------------------------------------------------
 *  Router testimoni
 * ------------------------------------------------------
 */

    /** Url testimoni **/
    $router->get('/testimoni', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM testimoni")->fetchAll();
        echo $jmw->render('modul/testimoni/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form testimoni **/
    $router->get('/testimoni-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/testimoni/index', ['act' => 'add']);
    });

    /** Show Edit Form testimoni **/
    $router->get('/testimoni-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM testimoni WHERE id_testimoni = $id ")->fetch();
        echo $jmw->render('modul/testimoni/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add testimoni  **/
    $router->post('/testimoni', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_testimoni'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "testimoni";
        include ($path . 'testimoni/aksi.php');
    });

    /** Delete testimoni **/
    $router->get('/testimoni-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "testimoni";
        include ($path . 'testimoni/aksi.php');
    });


    /*
 * ------------------------------------------------------
 *  Router portofolio
 * ------------------------------------------------------
 */

    /** Url portofolio **/
    $router->get('/portofolio', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM portofolio")->fetchAll();
        echo $jmw->render('modul/portofolio/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form portofolio **/
    $router->get('/portofolio-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/portofolio/index', ['act' => 'add']);
    });

    /** Show Edit Form portofolio **/
    $router->get('/portofolio-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM portofolio WHERE id_portofolio = $id ")->fetch();
        echo $jmw->render('modul/portofolio/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add portofolio  **/
    $router->post('/portofolio', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_portofolio'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "portofolio";
        include ($path . 'portofolio/aksi.php');
    });

    /** Delete portofolio **/
    $router->get('/portofolio-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "portofolio";
        include ($path . 'portofolio/aksi.php');
    });
     
/*
 * ------------------------------------------------------
 *  Router client
 * ------------------------------------------------------
 */

    /** Url client **/
    $router->get('/client', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM client")->fetchAll();
        echo $jmw->render('modul/client/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form client **/
    $router->get('/client-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/client/index', ['act' => 'add']);
    });

    /** Show Edit Form client **/
    $router->get('/client-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM client WHERE id_client = $id ")->fetch();
        echo $jmw->render('modul/client/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add client  **/
    $router->post('/client', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_client'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "client";
        include ($path . 'client/aksi.php');
    });

    /** Delete client **/
    $router->get('/client-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "client";
        include ($path . 'client/aksi.php');
    });


/*
 * ------------------------------------------------------
 *  Router Keuntungan
 * ------------------------------------------------------
 */

    /** Url keuntungan **/
    $router->get('/keuntungan', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM keuntungan")->fetchAll();
        $icons = $db->connection("SELECT * FROM icon")->fetchAll();
        echo $jmw->render('modul/keuntungan/index', ['act' => 'list', 'dataku' => $dataku, 'icons' => $icons]);
    });

    /** Show Add Form keuntungan **/
    $router->get('/keuntungan-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/keuntungan/index', ['act' => 'add']);
    });

    /** Show Edit Form keuntungan **/
    $router->get('/keuntungan-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM keuntungan WHERE id_keuntungan = $id ")->fetch();
        echo $jmw->render('modul/keuntungan/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add keuntungan  **/
    $router->post('/keuntungan', function () use ($jmw, $db, $path) {
        if (isset($_POST['id_keuntungan'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "keuntungan";
        include ($path . 'keuntungan/aksi.php');
    });

    /** Delete keuntungan **/
    $router->get('/keuntungan-delete-(\d+)', function ($id) use ($jmw, $db, $path) {
        $act = "remove";
        $hal = "keuntungan";
        include ($path . 'keuntungan/aksi.php');
    });


/*
 * ------------------------------------------------------
 *  Router Artikel
 * ------------------------------------------------------
 */

    /** Url Artikel **/
    $router->get('/artikel', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM artikel ORDER BY tgl DESC, id_artikel DESC");
        echo $jmw->render('modul/artikel/index', ['act' => 'list', 'tampil' => $dataku]);
    });

    /** Show Add Form Artikel **/
    $router->get('/artikel-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/artikel/index', ['act' => 'add']);
    });

    /** Show Edit Form Artikel **/
    $router->get('/artikel-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM artikel WHERE id_artikel = $id ")->fetch();
        echo $jmw->render('modul/artikel/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add Artikel  **/
    $router->post('/artikel', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_artikel'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "artikel";
        include ($path . 'artikel/aksi.php');
    });

    /** Delete Artikel **/
    $router->get('/artikel-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "artikel";
        include ($path . 'artikel/aksi.php');
    });

/*
 * ------------------------------------------------------
 *  Router faq
 * ------------------------------------------------------
 */

    /** Url faq **/
    $router->get('faq', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM faq");
        echo $jmw->render('modul/faq/index', ['act' => 'list', 'dataku' => $dataku]);
    });

    /** Show Add Form faq **/
    $router->get('faq-add', function () use ($jmw, $db) {
        echo $jmw->render('modul/faq/index', ['act' => 'add']);
    });

    /** Show Edit Form faq **/
    $router->get('faq-edit-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM faq WHERE id_faq = $id ")->fetch();
        echo $jmw->render('modul/faq/index', ['act' => 'edit', 'data' => $data]);
    });

    /** Update dan Add faq  **/
    $router->post('faq', function () use ($jmw, $db, $path,$msg) {
        if (isset($_POST['id_faq'])) {
            $act = "update";
        } else {
            $act = "add";
        }
        $hal = "faq";
        include ($path . 'faq/aksi.php');
    });

    /** Delete faq **/
    $router->get('faq-delete-(\d+)', function ($id) use ($jmw, $db, $path,$msg) {
        $act = "remove";
        $hal = "faq";
        include ($path . 'faq/aksi.php');
    });


/*
 * ------------------------------------------------------
 *  Router Pesan Contact
 * ------------------------------------------------------
 */

    /** Url List Pesan **/
    $router->get('/pesan', function () use ($jmw, $db) {
        $dataku = $db->connection("SELECT * FROM contact ");
        echo $jmw->render('modul/pesan/index', ['act' => 'list', 'tampil' => $dataku]);
    });

    /** Show Detail Pesan **/
    $router->get('/pesan-view-(\d+)', function ($id) use ($jmw, $db) {
        $data = $db->connection("SELECT * FROM contact WHERE id_contact = $id ")->fetch();
        $db->update("contact" , array('is_read' => 1), "id_contact = $data[id_contact] " );
        echo $jmw->render('modul/pesan/index', ['act' => 'view', 'data' => $data]);
    });

    /** Delete Pesan **/
    $router->get('/pesan-delete-(\d+)', function ($id) use ($jmw, $db, $path) {
        $act = "remove";
        $hal = "pesan";
        include ($path . 'pesan/aksi.php');
    });


    /** Ganti Background Admin **/
    $router->post('/teemo', function () use ($db) {
        $tehe = $db->connection("SELECT * FROM theme")->fetchAll();

        if($_POST['type'] == 'logobg'){

            if(empty($_POST['data']) || $_POST['data'] == ''  ){
                $data = $tehe[1]['code'];
            }else{
                $data = $_POST['data'];
            }
            $datas = array(
                'code' => $data
            );
            $db->update('theme', $datas, "id = 2");
            exit;
        }elseif($_POST['type'] == 'navbarbg'){

            if(empty($_POST['data']) || $_POST['data'] == ''  ){
                $data = $tehe[0]['code'];
            }else{
                $data = $_POST['data'];
            }
            $datas = array(
                'code' => $data
            );

            $db->update('theme', $datas, "id = 1");
            exit;
        }elseif($_POST['type'] == 'sidebarbg'){

            if(empty($_POST['data']) || $_POST['data'] == ''  ){
                $data = $tehe[2]['code'];
            }else{
                $data = $_POST['data'];
            }
            $datas = array(
                'code' => $data
            );

            $db->update('theme', $datas, "id = 3");
            exit;
        }
    });

    

});
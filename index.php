<?php
error_reporting(0);

$application_folder = 'app';
$system_path = 'system';
$admin_folder = 'admin';

if (($_temp = realpath($system_path)) !== FALSE)
{
    $system_path = $_temp.DIRECTORY_SEPARATOR;
}

// Path to the system directory
define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);
define('BASEPATH', $system_path);
define('ADMPATH', $admin_folder.DIRECTORY_SEPARATOR);

require_once __DIR__.'/vendor/autoload.php';
use JasonGrimes\Paginator;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require_once BASEPATH.'jogjamediaweb.php';


// Custom 404 Handler
$router->set404(function () use ($base_url) {
        header('location:  '.$base_url.'404');
});


/*
 * ------------------------------------------------------
 *  Router Front End
 * ------------------------------------------------------
 */

$router->get('/', function () use ($templates,$db) {

    // SEO
    $templates->addData(['seo' => 'home']);

    $slider  = $db->connection("SELECT * FROM slider ")->fetchAll();

    $header  = $db->connection("SELECT * FROM page WHERE id_page = 1 ")->fetch();

    $artikel  = $db->connection("SELECT * FROM artikel WHERE DATE(tgl) <= CURDATE() ORDER BY tgl DESC, id_artikel DESC LIMIT 6 ")->fetchAll();

    $foto  = $db->connection("SELECT * FROM foto ")->fetchAll();

    $data = array(
        'slider'    => $slider,
        'header'    => $header,
        'artikel'   => $artikel,
        'foto'      => $foto,
    );
    echo $templates->render('home', $data);

});


$router->get('/404', function () use ($templates,$db) {
    echo $templates->render('404');
});


$router->get('/sk-jalan', function () use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage', 'id' => 13]);

    $faq      = $db->connection("SELECT * FROM sizechart ORDER BY tgl DESC, id_sizechart DESC  ")->fetchAll();
    $data     = $db->read('page','*', 'id_page = 13')->fetch();
    echo $templates->render('sizechart', [ 'sizechart'=> $faq,'data'=>$data] );

});

$router->get('/kecamatan-tanjung-palas-tengah', function () use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage', 'id' => 13]);

    $faq      = $db->connection("SELECT * FROM teknis ORDER BY tgl DESC, id_teknis DESC  ")->fetchAll();
    $data     = $db->read('page','*', 'id_page = 13')->fetch();
    echo $templates->render('teknis', [ 'teknis'=> $faq,'data'=>$data] );

});

$router->get('/kecamatan-tanjung-selor', function () use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage', 'id' => 13]);

    $faq      = $db->connection("SELECT * FROM selor ORDER BY tgl DESC, id_selor DESC  ")->fetchAll();
    $data     = $db->read('page','*', 'id_page = 13')->fetch();
    echo $templates->render('selor', [ 'selor'=> $faq,'data'=>$data] );

});

$router->get('/kegiatan', function () use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage', 'id' => 13]);

    $faq      = $db->connection("SELECT * FROM kegiatan ORDER BY tgl DESC, id_kegiatan DESC  ")->fetchAll();
    $data     = $db->read('page','*', 'id_page = 13')->fetch();
    echo $templates->render('kegiatan', [ 'kegiatan'=> $faq,'data'=>$data] );

});


$router->get('/sk-jalan-(.*)-(\d+)', function ($slug,$id) use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detfoto', 'id_seo' => $id]);

    $datas        = $db->read('sizechart', '*', "id_sizechart = $id ")->fetch();
    $tipe = 'sizechart';
    echo $templates->render('pdf', ['data' => $datas, 'tipe' => $tipe] );

});


$router->get('/data-teknis-(.*)-(\d+)', function ($slug,$id) use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detfoto', 'id_seo' => $id]);

    $datas        = $db->read('teknis', '*', "id_teknis = $id ")->fetch();
    $tipe = 'teknis';
    echo $templates->render('pdf', ['data' => $datas, 'tipe' => $tipe] );

});

$router->get('/kegiatan-(.*)-(\d+)', function ($slug,$id) use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detfoto', 'id_seo' => $id]);

    $datas        = $db->read('kegiatan', '*', "id_kegiatan = $id ")->fetch();
    $tipe = 'kegiatan';
    echo $templates->render('pdf', ['data' => $datas, 'tipe' => $tipe ] );

});


$router->get('/project', function () use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage','id' => 8]);

    $listproject1        = $db->connection("SELECT * FROM listproject WHERE kategori = 'INDONESIAN HOTEL PROJECT' ")->fetchAll(PDO::FETCH_ASSOC);
    $listproject2        = $db->connection("SELECT * FROM listproject WHERE kategori = 'HOTEL PROJECT ABROAD' ")->fetchAll(PDO::FETCH_ASSOC);
    $slider  = $db->connection("SELECT * FROM slider ")->fetchAll();
    
    $deskripsi        = $db->read('page','deskripsi', 'id_page = 14')->fetchColumn();

    $data = array(
        'slider'    => $slider,
        'listproject1'    => $listproject1,
        'listproject2'    => $listproject2,
        'deskripsi'  => $deskripsi,
    );

    echo $templates->render('project', $data);

});

$router->get('/contact', function () use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage','id' => 8]);

    $data        = $db->read('page','*', 'id_page = 8')->fetch(PDO::FETCH_ASSOC);
    echo $templates->render('contact', ['data' => $data,]);

});


$router->get('/galeri', function () use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage','id' => 4]);

    /** Paging foto */
    $page   	    = new pagingAll;
    $batas 		    = 12;
    $idPag          = 1;
    $posisi 	    = $page->cariPosisi($batas,$idPag);
    $jmldata        = $db->connection('SELECT * FROM foto   ')->rowCount();
	$jmlhalaman     = $page->jmlhalaman($jmldata, $batas);
    $linkHalaman    = $page->navHalaman($idPag, $jmlhalaman,'galeri');
    $pagination     = array(
        'batas'         => $batas,
        'jmldata'       => $jmldata,
        'jmlhalaman'    => $jmlhalaman,
        'linkHalaman'   => $linkHalaman
    );

    $foto  = $db->connection("SELECT * FROM foto  ORDER BY tgl DESC LIMIT $posisi,$batas ")->fetchAll();

    $data         = $db->connection("SELECT * FROM page  WHERE id_page = 4 ")->fetch(PDO::FETCH_ASSOC);
    
    echo $templates->render('foto', ['foto' => $foto,'pagination' => $pagination, 'data' => $data]);

});

$router->get('/galeri-page-(\d+)', function ($id) use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage','id' => 4]);

    /** Paging foto */
    $page   	    = new pagingAll;
    $batas 		    = 12;
    $idPag          = $id;
    $posisi 	    = $page->cariPosisi($batas,$idPag);
    $jmldata        = $db->connection('SELECT * FROM foto  ')->rowCount();
	$jmlhalaman     = $page->jmlhalaman($jmldata, $batas);
    $linkHalaman    = $page->navHalaman($idPag, $jmlhalaman,'galeri');
    $pagination     = array(
        'batas'         => $batas,
        'jmldata'       => $jmldata,
        'jmlhalaman'    => $jmlhalaman,
        'linkHalaman'   => $linkHalaman
    );

    $foto  = $db->connection("SELECT * FROM foto  ORDER BY f.tgl DESC LIMIT $posisi,$batas ")->fetchAll();

    $data         = $db->connection("SELECT * FROM page  WHERE id_page = 4 ")->fetch(PDO::FETCH_ASSOC);
    
    echo $templates->render('foto', ['foto' => $foto,'pagination' => $pagination, 'data' => $data]);

});

$router->get('/galeri-(.*)-(\d+)', function ($slug,$id) use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detfoto', 'id_seo' => $id]);

    $datas        = $db->read('foto', '*', "id_foto = $id ")->fetch();
    $gallery      = $db->connection("SELECT * FROM gallery_foto WHERE id_foto = $id ");
    $foto           = $db->connection("SELECT * FROM foto WHERE id_foto != $id  LIMIT 6 ")->fetchAll();
    echo $templates->render('detfoto', ['data' => $datas, 'gallery'=> $gallery, 'foto' => $foto] );

});


$router->get('/berita', function () use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage','id' => 9]);

    /** Paging testimoni */
    $page   	    = new pagingAll;
    $batas 		    = 12;
    $idPag          = 1;
    $posisi 	    = $page->cariPosisi($batas,$idPag);
    $jmldata        = $db->connection('SELECT * FROM artikel   ')->rowCount();
	$jmlhalaman     = $page->jmlhalaman($jmldata, $batas);
    $linkHalaman    = $page->navHalaman($idPag, $jmlhalaman,'berita');
    $pagination     = array(
        'batas'         => $batas,
        'jmldata'       => $jmldata,
        'jmlhalaman'    => $jmlhalaman,
        'linkHalaman'   => $linkHalaman
    );

    $testimoni  = $db->connection("SELECT * FROM artikel  ORDER BY tgl DESC LIMIT $posisi,$batas ")->fetchAll();

    $data  = $db->connection("SELECT * FROM page  WHERE id_page = 9 ")->fetch(PDO::FETCH_ASSOC);
    
    echo $templates->render('artikel', ['artikel' => $testimoni,'pagination' => $pagination, 'data' => $data]);

});

$router->get('/berita-page-(\d+)', function ($id) use ($templates,$db) {

    /** SEO */
    $templates->addData(['seo' => 'detpage','id' => 9]);

    /** Paging testimoni */
    $page   	    = new pagingAll;
    $batas 		    = 12;
    $idPag          = $id;
    $posisi 	    = $page->cariPosisi($batas,$idPag);
    $jmldata        = $db->connection('SELECT * FROM artikel   ')->rowCount();
	$jmlhalaman     = $page->jmlhalaman($jmldata, $batas);
    $linkHalaman    = $page->navHalaman($idPag, $jmlhalaman,'berita');
    $pagination     = array(
        'batas'         => $batas,
        'jmldata'       => $jmldata,
        'jmlhalaman'    => $jmlhalaman,
        'linkHalaman'   => $linkHalaman
    );

    $testimoni  = $db->connection("SELECT * FROM artikel  ORDER BY tgl DESC LIMIT $posisi,$batas ")->fetchAll();

    $data  = $db->connection("SELECT * FROM page  WHERE id_page = 9 ")->fetch(PDO::FETCH_ASSOC);
    
    echo $templates->render('artikel', ['artikel' => $testimoni,'pagination' => $pagination, 'data' => $data]);

});

$router->get('/berita-(.*)-(\d+)', function ($slug,$id) use ($templates,$db) {
    /** SEO */
    $templates->addData(['seo' => 'detartikel', 'id_seo' => $id]);

    $datas      = $db->read('artikel', '*', "id_artikel = '$id' ")->fetch(PDO::FETCH_ASSOC);
    $artikel      = $db->connection("SELECT * FROM artikel WHERE id_artikel != $id AND DATE(tgl) <= CURDATE() ORDER BY tgl DESC, id_artikel DESC LIMIT 5 ")->fetchAll();

    $dilihat = $datas['dilihat'] + 1;
    $db->update("artikel",array('dilihat' => $dilihat), "id_artikel = $datas[id_artikel]");

    echo $templates->render('detberita', ['data' => $datas,'artikel' => $artikel] );
});



$router->post('/contact', function () use ($templates,$db,$csrf) {

    // Validate that a correct token was given
    if ($csrf->validate('my-form')) {
        $datas = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'city' => $_POST['city'],
            'country' => $_POST['country'],
            'zip_code' => $_POST['zip_code'],
            'main_business' => $_POST['main_business'],
            'company' => $_POST['company'],
            'interest' => $_POST['interest'],
        );
        $sender = array(
            'host' => $_ENV['MAIL_HOST'],
            'user' => $_ENV['MAIL_USER'],
            'pass' => $_ENV['MAIL_PASS'],
            'from' => $_ENV['MAIL_FROM'],
            'subject'=>$_ENV['MAIL_SUBJECT'],
        );
        $admin = $db->connection("SELECT * FROM admin WHERE id = 2")->fetch();
        //$res = sendEmail($datas,$admin,$sender);
        $res = true;
        if($res){
            $db->insert("contact", $datas);
            echo "<script>window.alert('Your message has been sent. Thank you!!'); window.location= 'contact'</script>";
        }else{
            echo "<script>window.alert('Your message failed to send'); window.location(history.back(-1))</script>";
        }
    }else{
        header("Location: contact");
    }

});

$router->post('/cari', function () use ($templates,$db) {
    $cari = $db->connection("SELECT * FROM artikel WHERE judul LIKE '%$_POST[cari]%' ")->fetchAll();
    $cari2 = $db->connection("SELECT * FROM foto WHERE judul LIKE '%$_POST[cari]%' ")->fetchAll();
    echo $templates->render('cari', ['cari' => $cari, 'cari2' => $cari2,'data' => $_POST['cari']] );
});

$router->get('/cart', function() use ($templates,$db,$cart) {
    //$cart->clear();
    
    $cart = $cart->getItems();
    echo $templates->render('cart',['cart' => $cart]);

});

$router->post('/cart', function() use ($templates,$db,$cart) {

    $id   = $_POST['id_produk'];
    
    if(isset($_POST['produk'])){
        $data = $db->read('produk', '*', "id_produk = '$id' ")->fetch(PDO::FETCH_ASSOC);
        $id   = "r".$data['id_produk'];
    }else{
        $data = $db->read('referensi', '*', "id_produk = '$id' ")->fetch(PDO::FETCH_ASSOC);
        $id   = "p".$data['id_produk'];
    }
    
    $cart->add($id,$_POST['jumlah'],[
        'price'  => str_replace(',', '', $data['harga']),
        'nama'  => $data['judul']
    ]);
    header("Location: cart");

});

$router->get('/add-cart-(\d+)', function ($id) use ($templates,$db,$cart) {
    
    if(isset($_POST['produk'])){
        $data = $db->read('produk', '*', "id_produk = '$id' ")->fetch(PDO::FETCH_ASSOC);
        $id   = "r".$data['id_produk'];
    }else{
        $data = $db->read('referensi', '*', "id_produk = '$id' ")->fetch(PDO::FETCH_ASSOC);
        $id   = "p".$data['id_produk'];
    }

    $cart->add($id,1,[
        'price'  => str_replace(',', '', $data['harga']),
        'nama'  => $data['judul']
    ]);

    header("Location: cart");
});

$router->get('/remove-cart', function () use ($cart) {

    $cart->destroy();
    header("Location: home");
});

$router->get('/remove-cart-(\d+)', function ($id) use ($templates,$db,$cart) {

    $cart->remove($id);
    header("Location: cart");
});




$router->post('/update-cart', function() use ($templates,$db,$cart) {
    
    $total = $cart->getTotalItem();
    $cart->destroy();

    for($i=1; $i <= $total ; $i++){
        if($_POST['jml-'.$i] > 0){
            $cart->add($_POST['idku-'.$i],$_POST['jml-'.$i], [
                'price'  => $_POST['price-'.$i],
                'nama'  => $_POST['nama-'.$i],
            ]);
        }
    }  

    //$cart = $cart->getItems();
    if($_POST['btn_tipe'] == 'update'){
        
        header("Location: cart");
    }else{
        
        header("Location: checkout");
    } 

});

$router->get('/checkout', function () use ($templates,$db,$cart) {
    $total = $cart->getTotalItem();
    if($total > 0){
        $cart = $cart->getItems();
        $rekening = $db->read("rekening")->fetchAll();
        echo $templates->render('order', ['cart' => $cart,'rekening' => $rekening, 'cart' => $cart] );
    }else{
        header("Location: cart");
    }
    
});


$router->post('/checkout', function () use ($templates,$db,$csrf,$cart) {
    $keranjang = $cart->getItems();
    // Validate that a correct token was given
    if ($csrf->validate('my-form')) {
        $datas = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'company' => $_POST['company'],
            'website' => $_POST['website'],
            'phone' => $_POST['phone'],
            'message' => $_POST['message'],
        );

        $sender = array(
            'host' => $_ENV['MAIL_HOST'],
            'user' => $_ENV['MAIL_USER'],
            'pass' => $_ENV['MAIL_PASS'],
            'from' => $_ENV['MAIL_FROM'],
            'subject'=>$_ENV['MAIL_SUBJECT'],
        );
        $admin = $db->connection("SELECT * FROM admin WHERE id = 2")->fetch();
        //$res = sendEmail($datas,$admin,$sender);
        $res = true;
        if($res){
            $db->insert("quotation", $datas);
            $insertId = $db->lastId();

            $sub = 0; 
            foreach ($keranjang as $items) :
                foreach($items as $item) :
                $sub = $item['quantity'] * $item['attributes']['price'];
                $datas = array(
                    'id_quotation' => $insertId,
                    'nama' => $item['attributes']['nama'],
                    'harga' => $item['attributes']['price'],
                    'jumlah' => $item['quantity'],
                    'sub_total' => $sub,
                );
                $db->insert("quotation_detail", $datas);
                endforeach; 
            endforeach;
            $cart->clear();
            echo "<script>window.alert('Quotation Request Sent Successfully  !'); window.location= '/'</script>";
            
        }else{
            echo "<script>window.alert('Quotation Request can't sent !'); window.location(history.back(-1))</script>";
        }
    }
    else {
        header("Location: checkout");
    }
        

});


/*
 * ------------------------------------------------------
 *  Router Admin
 * ------------------------------------------------------
 */
include(APPPATH.'admin/router.php');

$router->run();
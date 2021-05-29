<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
session_start();
// Load our autoloader & database
require_once BASEPATH.'database.php';

//Load helpers
require_once BASEPATH.'helper_base.php';
require_once BASEPATH.'helper_paging.php';
require_once BASEPATH.'helper_csrf.php';
require_once BASEPATH.'z_setting.php';
require_once BASEPATH.'fungsi_umum.php';
require_once BASEPATH.'fungsi_thumb.php';
require_once BASEPATH.'ImgCompressor.php';
require_once BASEPATH.'helper_email.php';
require_once BASEPATH.'helper_cart.php';
require_once BASEPATH.'flash_message.php';
require_once BASEPATH.'show_stat.php';

// Security for Form POST
$csrf = new CSRF();

// Instantiate the class Flash Message
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

// Error Display
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();

// Initialize Cart object
$cart = new Cart([
    // Can add unlimited number of item to cart
    'cartMaxItem'      => 0,
    
    // Set maximum quantity allowed per item to 99
    'itemMaxQuantity'  => 99,
    
    // Do not use cookie, cart data will lost when browser is closed
    'useCookie'        => true,
  ]);

$totalKeranjang = $cart->getTotalItem();


$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

// Create Router instance
$router = new \Bramus\Router\Router();

// Before Router Middleware
$router->before('GET', '/.*', function () {
    header('X-Powered-By: bramus/router');
});

// Create new Plates instance
$templates = new League\Plates\Engine(APPPATH);
$jmw       = new League\Plates\Engine(APPPATH.'admin');
$login     = new League\Plates\Engine(APPPATH.'admin/login');

// Module Setting
$sosmed   = $db->connection("SELECT * FROM social_media")->fetchAll();
$kategori = $db->connection("SELECT * FROM produk_kategori")->fetchAll();
$ftBerita = $db->connection("SELECT * FROM artikel ORDER BY id_artikel  DESC LIMIT 2")->fetchAll();

$data = array('namaweb'=>$namaweb,'deskrip'=>$deskrip,'imgname1'=>$imgname1);
$templates->addData($data);
$jmw->addData($data);
$login->addData($data);
$templates->addData(['db' => $db, 'seo' => '', 'base_url' => $base_url, 'csrf' => $csrf,'sosmed' => $sosmed,'deskrip' => $deskrip,'ftBerita' => $ftBerita,'kategori'=> $kategori,'totalKeranjang' => $totalKeranjang]);

$theme = $db->connection("SELECT * FROM theme")->fetchAll();
$jmw->addData(['tehe' => $theme, 'seo' => '', 'msg' => $msg]);



// Button Floating Whatsapp 
$textBtnWa = "Halo ".$namaweb." , bisa minta informasinya lebih lanjut?  ";

$stat = array(
    'pengunjung'  => $pengunjung,
    'totalpengunjung'  => $totalpengunjung,
    'online'   => $pengunjungonline,
    'totalhits' => $totalhits,
    'hits'  => $hits
);

$templates->addData(['textBtnWa' => $textBtnWa,'stat' => $stat]);
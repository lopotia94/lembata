
<?php
$default 	= "DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN";
$default2 	= "DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN";
$judul  	= "DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN";
$default3 	= "https://www.sidatekrj.com";
$default4 	= "https://sidatekrj.com";
$seourl     = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$urlshare   = $seourl ; 
if($seo=='home' ){
	$tseo = $db->connection("SELECT * FROM page WHERE id_page='1' ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC);
	$judul= "$seo[title]   ";
	$keyword = 	$seo['keyword'];
	$description = 	$seo['description'];
	$imageshare = "images/default-share.jpg";
	$urlshare = $seourl ;
}
elseif($seo=='about'){
	$tseo = $db->connection("SELECT * FROM page WHERE id_page='1' ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC);
	
	$judul= "$seo[title]  ";
	$keyword = 	$seo['keyword'];
	$description = 	$seo['description'];

	$imageshare = "images/default-share.jpg";
	$urlshare = $seourl ;
}
elseif($seo=='portofolio'){
	$tseo = $db->connection("SELECT * FROM page WHERE id_page=2 ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC);
	
	$judul= "$seo[title]  | $default ";
	$keyword = 	$seo['keyword'];
	$description = 	$seo['description'];

	$imageshare = "images/default-share.jpg";
	$urlshare = $seourl ;
}
elseif($seo=='harga'){
	$tseo = $db->connection("SELECT * FROM page WHERE id_page= 12 ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC); 
	
	$judul= "$seo[title] ";
	$keyword = 	$seo['keyword'];
	$description = 	$seo['description'];

	$imageshare = "images/default-share.jpg";
		$urlshare = $seourl ;

}elseif($seo=='hubungi'){
	$tseo = $db->connection("SELECT * FROM page WHERE id_page= 8 ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC); 
	
	$judul= "$seo[title] ";
	$keyword = 	$seo['keyword'];
	$description = 	$seo['description'];

	$imageshare = "images/default-share.jpg";
		$urlshare = $seourl ;

}
elseif($seo=='kategoriProduk'){
	$tseo = $db->connection("SELECT * FROM produk_kategori WHERE id_produk_kategori = $id ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC); 
	$judul= "$seo[judul] | $default";

	$tseo = $db->connection("SELECT * FROM page WHERE id_page= 1 ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC); 
	
	$keyword = 	$seo['keyword'];
	$description = 	$seo['description'];

	$imageshare = "images/default-share.jpg";
	$urlshare = $seourl ;

}
elseif($seo=='contact'){
	$tseo = $db->connection("SELECT * FROM page WHERE id_page= 8 ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC);
	
	$judul= "$seo[title]  | $default ";
	$keyword = 	$seo['keyword'];
	$description = 	$seo['description'];

	$imageshare = "images/default-share.jpg";
	$urlshare = $seourl ;
}elseif($seo=='referensi'){
	$tseo = $db->connection("SELECT * FROM referensi WHERE id_referensi = $id ");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC);
	
	
	$des = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$seo["deskripsi"])));
	$des2 = substr($des,0,strrpos(substr($des,0,177)," "));
 

	$judul= "$seo[judul] | $default";
	$keyword = $seo['keyword'];
	$description = $des2;

	$imageshare = "images/referensi/".$seo['gambar'];
	$urlshare = $seourl ;

	
}elseif($seo=='detproduk'){
	$tirl = $db->read('produk', '*', "id_produk = $id_seo ");
	$ttirl = $tirl->fetch(PDO::FETCH_ASSOC);

	$des = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$ttirl["deskripsi"])));
	$des2 = substr($des,0,strrpos(substr($des,0,177)," "));

	$judul= "$ttirl[judul] | $default";
	$keyword = "$ttirl[keyword]";
	$description = "$ttirl[description]";

	$imageshare = "images/produk/$ttirl[gambar]";
	$urlshare = $seourl ;
}elseif($seo=='detartikel'){
	$tirl = $db->connection("SELECT * FROM artikel WHERE id_artikel= $id_seo ");
	$ttirl = $tirl->fetch(PDO::FETCH_ASSOC);

	$des = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$ttirl["deskripsi"])));
	$des2 = substr($des,0,strrpos(substr($des,0,177)," "));

	$judul= "$ttirl[judul] | $default";
	$keyword = "$ttirl[keyword]";
	$description = "$ttirl[description]";

	$imageshare = "images/artikel/$ttirl[gambar]";
	$urlshare = $seourl ;
}elseif($seo=='detpage'){
	$tirl = $db->connection("SELECT * FROM page WHERE id_page= $id ");
	$ttirl = $tirl->fetch(PDO::FETCH_ASSOC);

	$des = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$ttirl["deskripsi"])));
	$des2 = substr($des,0,strrpos(substr($des,0,177)," "));

	$judul= "$ttirl[title]";
	$keyword = "$ttirl[keyword]";
	$description = "$ttirl[description]";

	$imageshare = "images/default-share.jpg";
	$urlshare = $seourl ;
}else{
	$tseo = $db->connection("SELECT judul, keyword, description FROM page WHERE id_page='0'");
	$seo = $tseo->fetch(PDO::FETCH_ASSOC);

	$judul= $default;
	$keyword = "$seo[keyword]";
	$description = "$seo[description]";

	$imageshare = "images/default-share.jpg";
		$urlshare = $seourl ;
}

?>


    <title><?php echo $judul; ?></title>
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    
    <meta name="googlebot" content="index,follow">
    <meta name="googlebot-news" content="index,follow">
    <meta name="robots" content="index,follow">
    <meta name="Slurp" content="all">
    <meta property="fb:app_id" content="501046580289991">
    <meta property="og:title" content="<?php echo $judul; ?>">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="<?php echo $default; ?>">

    <meta name="image_src" content="<?php echo $default3 ?>/<?php echo $imageshare ?>">
    <meta property="og:image" content="<?php echo $default3 ?>/<?php echo $imageshare ?>">
    <meta property="og:image:alt" content="<?php echo $default3 ?>/<?php echo $imageshare ?>">
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="620" />
    <meta property="og:image:height" content="413" />
    <meta property="og:url" content="<?php echo $urlshare ?>">

    <link rel="canonical" href="<?php echo $urlshare ?>">

    <meta property="og:description" content="<?php echo $description; ?>">
    <meta name="news_keywords" content="<?php echo $keyword; ?>">
    <link rel="shortlink" href="<?php echo $default3 ?>">
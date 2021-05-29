<?php

function youtube($s) {
    $c = array ('');
    $d = array ('https://www.youtube.com/watch?v=','https://youtube.com/watch?v=','www.youtube.com/watch?v=','http://www.youtube.com/watch?v=','https://youtu.be/');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = str_replace($c, '', $s); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}

function seo($s) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','“','”');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}

function seo2($s) {
    $c = array (' ');
    $d = array ('/','image');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = strtolower(str_replace($c, '', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}

function tgl($tgl){
	$tanggal = substr($tgl,8,2);
	$bulan = substr($tgl,5,2);
	$tahun = substr($tgl,0,4);
	return $tanggal.'/'.$bulan.'/'.$tahun;
}

function limit_char($x, $length)
{
	if(strlen($x)<=$length){
	   return $x;
	}
	else{
	   $y=substr($x,0,$length) . '...';
	   return $y;
	}

}
		
function rp($angka){
  $rupiah=number_format($angka,0,',','.');
  return $rupiah;
}

function telp($s) {
    $c = array (' ');
	$d = array ('-',',','.','~','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = strtolower(str_replace($c, '', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}

	function tgl2($tgl2){
			$jam = substr($tgl2,11,5);
			$tanggal = substr($tgl2,8,2);
			$bulan = getBulan2(substr($tgl2,5,2));
			$tahun = substr($tgl2,0,4);
			return $tanggal.' '.$bulan.' '.$tahun.' '.$jam;		 
	}

	function getBulan2($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
	}

function limit_desc($deskripsi,$jumlah){
	$des = htmlentities(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$deskripsi)));
	$des2 = substr($des,0,strrpos(substr($des,0,$jumlah)," "));
	return $des2;
}

function lopoUpload($name,$folder){
	$image = new Bulletproof\Image($_FILES);
	$image->setName($name)
		->setMime(array('jpeg', 'png', 'jpg', 'gif'))
		->setSize(10, 2060817)
		->setLocation("images/".$folder);
	if( $image["lopoFile"] ){
		if($image->upload()){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	
}

function lopoMime ($mime_type){

    $extensions = array(
		'rtf'	=>	'text/rtf',
		'xlsx'	=>	array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/zip', 'application/vnd.ms-excel', 'application/msword', 'application/x-zip'),
		'word'	=>	array('application/msword', 'application/octet-stream'),
		'pdf'	=>	array('application/pdf', 'application/force-download', 'application/x-download', 'binary/octet-stream')
	);

    // Add as many other Mime Types / File Extensions as you like

    return $extensions[$mime_type];

}

function getSize($file){
	$filesize = filesize($file); // bytes
	$filesize = round($filesize / 1024 / 1024, 1); // megabytes with 1 digit
	return $filesize;
}

function uploadFile($fupload_name,$direktory)
{
    //direktori gambar
    $vdir_upload = "images/$direktory/";
    $vfile_upload = $vdir_upload . $fupload_name;
    $tipe_file = $_FILES['lopoFile']['type'];

	$allowedMimeTypes = array( 
		'application/msword',
		'application/octet-stream',
		'text/pdf',
		'application/pdf', 
		'application/force-download', 
		'application/x-download', 
		'binary/octet-stream',
		'text/rtf',
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
	);

    //Simpan gambar dalam ukuran sebenarnya
	if ( in_array( $tipe_file, $allowedMimeTypes ) ) 
	{
		move_uploaded_file($_FILES["lopoFile"]["tmp_name"], $vfile_upload);
	}else{
		return false;
	}

	return true;
}

function uploadGambar($name,$folder,$field){
	$image = new Bulletproof\Image($_FILES);
	$image->setName($name)
		->setMime(array('jpeg', 'png', 'jpg', 'gif'))
		->setSize(10, 5060817)
		->setLocation("images/".$folder);
	if( $image[$field] ){
		if($image->upload()){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	
}

function lopoCompress($output,$input,$tipeFile,$level = 0){
	// setting
	$setting = array(
		'directory' => "images/".$output, // directory file compressed output
		'file_type' => array( // file format allowed
		'image/jpeg',
		'image/png',
		'image/gif'
		)
	);
	// create object
	$ImgCompressor = new ImgCompressor($setting);
	// run('STRING original file path', 'output file type', INTEGER Compression level: from 0 (no compression) to 9);
	// example level = 2 same quality 80%, level = 7 same quality 30% etc
	$result = $ImgCompressor->run($input, $tipeFile, $level);
	return $result;
}

function convertDate2($slash,$date){
	
	date_default_timezone_set( 'Asia/Jakarta' );
	if ( !empty($date) ) {
        $tgl 	 = explode( $slash, $date );
        $tgl1 = $tgl[0];
        $bln = $tgl[1];
        $thn = $tgl[2];
		$tgl_post = "$thn-$bln-$tgl1";
	} else {
		$tgl_post = date( 'Y-m-d' );
	}

	return $tgl_post;
}

function convertDate($slash,$date){
	
	date_default_timezone_set( 'Asia/Jakarta' );
	if ( !empty($date) ) {
        $tgl 	 = explode( $slash, $date );
        $tgl1 = $tgl[1];
        $bln = $tgl[0];
        $thn = $tgl[2];
		$tgl_post = "$thn-$bln-$tgl1";
	} else {
		$tgl_post = date( 'Y-m-d' );
	}

	return $tgl_post;
}

function rentangHarga($data){
	$kecil = 99999999;
	$besar = 1;
	foreach($data as $r){
		$harga = str_replace(".", "", $r['harga']);
		if($harga > $besar ){
			$besar = $harga;
		}
		if($harga < $kecil){
			$kecil = $harga;
		}
	}

	return "Rp.".rp($kecil)." - Rp.".rp($besar);
}
	
?>
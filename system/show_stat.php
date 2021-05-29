<?php
	$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
	$waktu   = time(); // 
	
	$bataswaktu       = time() - 300;
	
	$edit1 = $db->connection("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip ASC");
	$edit2 = $db->connection("SELECT COUNT(hits) as totalz FROM statistik");
	$edit3 = $db->connection("SELECT hits FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal ASC");
	$edit4 = $db->connection("SELECT SUM(hits) as totalz FROM statistik");
	$edit5 = $db->connection("SELECT * FROM statistik WHERE online > '$bataswaktu'");
	
	
	$row_count1 = $edit1->rowCount();
	$row_count3 = $edit3->rowCount();
	$row_count5 = $edit3->rowCount();

	$pengunjung       = $row_count1;
	$totalpengunjung  = $edit2->fetch(PDO::FETCH_ASSOC);
	$hits             = $row_count3;
	$totalhits        = $edit4->fetch(PDO::FETCH_ASSOC);
	$tothitsgbr       = $edit4->fetch(PDO::FETCH_ASSOC);
	$online = $row_count5;


	$tanggal = date("Y-m-d"); // Mendapatkan tanggal sekarang
    $bataswaktu = time() - 300;

    $pengunjung = $db->connection("SELECT COUNT(*) FROM statistik WHERE tanggal='$tanggal' ")->fetchColumn();
    $totalpengunjung = $db->connection("SELECT COUNT(ip)  FROM statistik")->fetchColumn();
    $pengunjungonline = $db->connection("SELECT COUNT(ip) FROM statistik WHERE tanggal='$tanggal' AND online > '$bataswaktu' LIMIT 1")->fetchColumn();
    $totalhits = $db->connection("SELECT SUM(hits) as totalz FROM statistik")->rowCount();
    $hits = $db->connection("SELECT SUM(hits) FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal DESC LIMIT 1")->fetchColumn();

?>
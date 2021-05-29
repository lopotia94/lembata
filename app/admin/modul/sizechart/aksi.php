<?php
use \Gumlet\ImageResize;
$mimes = new \Mimey\MimeTypes;

// Update modul
if ($act == 'update') {
    $jdl2 = substr($_POST["nama"], 0, 100);

    $lokasi_file = $_FILES['lopoFile']['tmp_name'];
    $nama_file = $_FILES['lopoFile']['name'];
    $tipe_file = $_FILES['lopoFile']['type'];
    $ukuran = $_FILES['lopoFile']['size'];
    $tipe_file2 = $mimes->getExtension($tipe_file);
    $seojdul = seo($jdl2);
    $acak = rand(00, 99);
    $nama_file_unik = $seojdul . "-" . $acak . "." . $tipe_file2;
    $nama_seo = seo($_POST["nama"]);

    if (!empty($lokasi_file)) {
        if (($ukuran == 0) or ($ukuran == 02) or ($ukuran > 50060817)) {
            $msg->warning('Gagal Upload Berkas, ukuran berkas lebih dari 50 MB !');
            echo "<script>window.location(history.back(-1))</script>";
        } else {
            $edit = $db->connection("SELECT gambar FROM sizechart WHERE id_sizechart='$_POST[id_sizechart]'");
            $tedit = $edit->fetch(PDO::FETCH_ASSOC);

            unlink("images/sizechart/$tedit[gambar]");

            $res = uploadFile($nama_file_unik,'sizechart');

            if ($res == true) {
                try {
                    $datas = array(
                        'nama' => $_POST["nama"],
                        'slug' => $nama_seo,
                        'deskripsi' => $_POST["deskripsi"],
                        'tgl' => date('Y-m-d'),
                        'gambar' => $nama_file_unik
                    );
                    $db->update("sizechart", $datas, "id_sizechart= '$_POST[id_sizechart]' ");
                    
                    $msg->info('Data berhasil diedit');
                    echo "<script>window.location = '$hal'</script>";
                } catch (PDOException $e) {
                    $msg->error('sizechart Gagal diedit!');
                    echo "<script> window.location = '$hal-edit-$_POST[id_sizechart]'</script>";
                }
            } else {
                $msg->error('Something error with this image');
                echo "<script>window.location(history.back(-1))</script>";
            }
        }
    } else {
        try {

            $datas = array(
                'nama' => $_POST["nama"],
                'slug' => $nama_seo,
                'deskripsi' => $_POST["deskripsi"],
                'tgl' => date('Y-m-d'),
            );
            $db->update("sizechart", $datas, "id_sizechart= '$_POST[id_sizechart]' ");
            $msg->info('Data berhasil diedit');

            echo "<script> window.location = '$hal'</script>";
        } catch (PDOException $e) {
            $msg->error('sizechart Gagal diedit!');
            echo "<script>window.location = '$hal-edit-$_POST[id_sizechart]'</script>";
        }
    }
}

// add modul
elseif ($act == 'add') {
    
    $lokasi_file = $_FILES['lopoFile']['tmp_name'];
    $nama_file = $_FILES['lopoFile']['name'];
    $tipe_file = $_FILES['lopoFile']['type'];
    $ukuran = $_FILES['lopoFile']['size'];
    $tipe_file2 = $mimes->getExtension($tipe_file);
    $seojdul = seo($_POST["nama"]);
    $acak = rand(00, 99);
    $nama_file_unik = $seojdul . "-" . $acak . "." . $tipe_file2;
    $nama_seo = seo($_POST["nama"]);

    date_default_timezone_set('Asia/Jakarta');

    if (empty($nama_file)) {
        echo "<script>window.alert('Berkas Tidak Boleh Kosong!'); window.location(history.back(-1))</script>";
    } else {
        if (($ukuran == 0) or ($ukuran == 02) or ($ukuran > 50060817)) {
            echo "<script>window.alert('Gagal Upload Berkas, ukuran Berkas lebih dari 50 MB !'); window.location(history.back(-1))</script>";
        } else {
            $res = uploadFile($nama_file_unik,'sizechart');
            if ($res == true) {
                try {

                    $datas = array(
                        'nama' => $_POST["nama"],
                        'slug' => $nama_seo,
                        'deskripsi' => $_POST["deskripsi"],
                        'tgl' => date('Y-m-d'),
                        'gambar' => $nama_file_unik,
                    );
                    $saved = $db->insert('sizechart', $datas);
                    $insertId = $db->lastId();
                    
                    $msg->success('Data berhasil ditambah');
                    echo "<script> window.location = '$hal'</script>";

                } catch (PDOException $e) {
                    echo "$e";
                }
            } else {
                echo "<script>alert('Format Berkas Salah !'); window.location = '$hal'</script>";
            }
        }
    }
}

// remove modul
elseif ($act == 'remove') {
    $edit = $db->connection("SELECT gambar FROM sizechart WHERE id_sizechart=$id ");
    $rr = $edit->fetch(PDO::FETCH_ASSOC);
    unlink("images/sizechart/$rr[gambar]");

    $del = $db->delete("sizechart", "id_sizechart=$id ");
    $msg->info('Data berhasil dihapus');
    echo "<script> window.location = '$hal'</script>";

} 
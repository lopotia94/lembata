<?php $this->layout('template', ['hal'=>'Kecamatan Tanjung Palas']) ?>
<?php
	$module = "teknis";

	switch($act){
        case "list":
?>
<a href="teknis-add" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data</a>
<br><br>
<div class="table-responsive">
    <table id="my_table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Ukuran</th>
                <th>Berkas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
				$no 	= 1;
				foreach($dataku as $row) :
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><label for="" class="label label-info" style="font-size: 14px;"><?= getSize('images/teknis/'.$row['gambar']) ?> MB</label></td>
                <td style="width:12%" ><a href="../images/teknis/<?php echo $row['gambar'] ?>" class="btn btn-info" download>
                        <i class="fas fa-download"></i> </a>
                    <a  target="_blank" href="../images/teknis/<?php echo $row['gambar'] ?>" class="btn btn-secondary "
                        role="button" aria-pressed="true" > <i class="fa fa-eye"></i> 
                        </a>
                </td>
                <td style="width:20%"><a href="teknis-edit-<?php echo $row['id_teknis'] ?>"
                        class="btn btn-warning"> <i class="fas fa-pencil-alt"></i> Edit</a>
                    <a onClick="javascript: return confirm('Yakin untuk Menghapus data ?');"
                        href="<?php echo $module; ?>-delete-<?php echo $row['id_teknis']; ?>" class="btn btn-danger "
                        role="button" aria-pressed="true" style="min-width: 60px;"> <i class="fa fa-trash"></i>
                        Delete</a>
                </td>
            </tr>
            <?php 
			    $no++;
				endforeach
			?>
        </tbody>
    </table>
</div>
<?php
		break;
		case "add":
?>
<div class="card">
    <div class="card-body">
        <form action="teknis" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="nama" value="Berkas">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message-text" class="control-label">Berkas</label>
                        <input type="file" class="form-control" name="lopoFile">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea id="ckeditor2" name="deskripsi"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" id="btn-teknis" class="btn btn-primary"><i class="fa fa-paper-plane"></i>
                        Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    document.querySelector('#btn-teknis').addEventListener('click', function (e) {
        loadingSweet();
    })
</script>
<?php
	break;
	case "edit":
?>
<div class="card">
    <div class="card-body">
        <form action="teknis" id="form-teknis" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_teknis" value="<?php echo $data['id_teknis'] ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea id="ckeditor2" name="deskripsi"><?php echo $data['deskripsi'] ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message-text" class="control-label">Berkas</label>
                        <input type="file" class="form-control" name="lopoFile">
                        <p style="margin-top: 5px;margin-bottom:0;" class="help-block text-red">*) Apabila Berkas tidak diubah, dikosongkan saja.</p>
                        <div class="" id="img-lopo">
                            <!-- <img style="height:200px" src="../images/teknis/small/<?php echo $data['gambar'] ?>"> -->
                            <i class="fa fa-file-pdf-o fa-2x"></i>
                        </div>
                    </div>
                </div>
                <input type="submit" id="btn-teknis" class="btn btn-primary" value="Simpan Data">
            </div>
        </form>
    </div>
</div>
<script>
    document.querySelector('#btn-teknis').addEventListener('click', function (e) {
        loadingSweet();
    })
</script>
<?php
    break;
	case "addteknis":
?>
<form action="modul/teknis/aksi.php?module=<?php echo $module; ?>&act=addteknis" method="POST"
    enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-body">
                <div class="form-group">
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group ">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <label for="">Gambar</label>
                    <input type="file" name="nyanpload" class="form-control">
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-info" value="Simpan Data">
    </div>
</form>
<?php
    break;
	case "editteknis":
	$gam =  $db->connection("SELECT * FROM teknis_teknis WHERE id_teknis = '$_GET[id]'  ")->fetch();
?>
<form action="modul/<?php echo $module; ?>/aksi.php?module=<?php echo $module; ?>&act=editteknis" method="POST"
    enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-body">
                <div class="form-group">
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $gam['nama'] ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <input type="hidden" name="idm" value="<?php echo $_GET['idm']; ?>">
                    <label for="">Gambar</label>
                    <input type="file" name="nyanpload" class="form-control">
                    <br><br>
                    <img style="height:100px"
                        src="../images/teknis_teknis/<?php echo $imgname2."-".$gam['gambar']?>">
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-info" value="Simpan Data">
    </div>
</form>
<?php
		break;  
	}
?>
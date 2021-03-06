<?php $this->layout('template', ['hal'=>'Produk']) ?>
<?php
	$module = "produk";

	switch($act){
		case "list":
	?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo $module; ?>-add';"><i
                    class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
            <div class="card" style="margin-top:10px">
                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="my_table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="2%" class="center">No</th>
                                    <th width="30%" class="center">Judul </th>
                                    <th width="10%" class="center">Gambar</th>
                                    <th width="15%" class="center">Published</th>
                                    <th width="20%" class="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            while($r = $tampil->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <tr>
                                    <td align="center"><?php echo  $no; ?></td>
                                    <td><?php echo  $r['judul']; ?></td>
                                    <td align="center"><img src="../images/<?php echo "produk/small/$r[gambar]"; ?>"
                                            width="180px">
                                    </td>
                                    <td width="20%" align="center"><?php echo  tgl2($r['tgl']); ?></td>

                                    <td align="center" width="20%">
                                        <a href="<?php echo $module; ?>-edit-<?php echo $r['id_produk']; ?>"
                                            class="btn btn-warning " role="button" aria-pressed="true"
                                            style="min-width: 50px;margin-bottom: 5px;"> <i class="fa fa-pencil"></i>
                                            Edit</a>

                                        <a onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');"
                                            href="<?php echo $module; ?>-delete-<?php echo $r['id_produk']; ?>"
                                            class="btn btn-danger " role="button" aria-pressed="true"
                                            style="min-width: 60px;margin-bottom: 5px;"> <i class="fa fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                <?php
						$no++;
						}
						?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div><!-- /.col-md-12 -->
    </div>
</section><!-- /.section -->

<?php
		break;
		case "add":
		
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date("d-m-Y");
		$skrng = date("d/m/Y");
		$time = date("H:i");
	?>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12 ">
            <div class="card">
                <!-- form start -->
                <form role="form" action="produk" method="POST" enctype="multipart/form-data">
                    <!-- general form elements -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul<span title="wajib"
                                            style="color: red;">*</span></label>
                                    <input name="judul" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori</label>
                                    <select name="id_produk_kategori" class="form-control">
                                        <?php foreach($kategori as $r) : ?>
                                        <option value="<?=$r['id_produk_kategori']?>" ><?=$r['judul']?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input name="harga" type="text" class="form-control ninjin" required>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Stok</label>
                                    <select name="stok" class="form-control">
                                        <option value="Tersedia" >Tersedia</option>
                                        <option value="Habis">Habis</option>
                                        <option value="Terbatas" >Terbatas</option>
                                        <option value="Pre Order" >Pre Order</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tokopedia</label>
                                    <input name="tokopedia" type="text" class="form-control " placeholder="cth. https://www.tokopedia.com/kostumbasket/bikin-jersey-rochester-jersey" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bukalapak</label>
                                    <input name="bukalapak" type="text" class="form-control " placeholder="cth. https://www.bukalapak.com/p/sepeda/fullbike/mtb/jersey-sepeda-mtb-rochester-jogja" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lazada</label>
                                    <input name="lazada" type="text" class="form-control " placeholder="cth. https://www.lazada.co.id/products/kaos-olahraga-jersey-123456789.html" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Shopee</label>
                                    <input name="shopee" type="text" class="form-control " placeholder="cth. https://shopee.co.id/Jersey-Sepeda-Roadbike" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blibli</label>
                                    <input name="blibli" type="text" class="form-control " placeholder="cth. https://www.blibli.com/p/rochester-jersey" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tgl Publish</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                        <input name='tgl' type="text" class="form-control fc-datepicker"
                                            placeholder="MM/DD/YYYY">
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <br />
                                    <input type="file" name="lopoFile" id="lopoFile" class="form-control">
                                    <p style="margin-top: 5px;margin-bottom:0;" class="help-block">*) Ukuran Gambar
                                        Minimal Lebar 750px dan Tinggi 350px</p>
                                    <p class="help-block">*) Maksimal Size Gambar 2MB</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <textarea id="ckeditor" class="ckeditor" name="deskripsi"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <p class="alert alert-warning">SEO (Search Engine Optimation)</p>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"
                                            role="tab"><span class="hidden-sm-up"><i class="sl-icon-key"></i></span>
                                            <span class="hidden-xs-down">Keyword</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile"
                                            role="tab"><span class="hidden-sm-up"><i class="sl-icon-list"></i></span>
                                            <span class="hidden-xs-down">Description</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <div class="p-20">
                                            <textarea rows="4" name="keyword" class="form-control"
                                                placeholder="SEO Keyword"></textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane  p-20" id="profile" role="tabpanel">
                                        <textarea rows="4" name="description" class="form-control"
                                            placeholder="SEO Description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.card-body -->
                    <div class="card-footer pb-5">
                        <button type="submit" class="mb-2 btn btn-primary float-left">Simpan</button>
                        <input type="button" class="mb-2 btn btn-secondary float-right" value="Kembali"
                            onclick="location.href='<?php echo $module; ?>' ">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
		break;
		case "edit":
		$tgl 	= explode("-", $data['tgl']);
		$tgl1=$tgl[2];
		$bln=$tgl[1];
		$thn=$tgl[0];
		$tangalo = $tgl1."/".$bln."/".$thn;	
		$keywordo = $data['keyword'];
		$unggulan = $data['unggulan'];
		$desc     = $data['description']
    ?>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12 ">
            <div class="card">
                <!-- form start -->
                <form role="form" action="produk" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_produk" value="<?php echo $data['id_produk'] ?>">
                    <!-- general form elements -->
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul<span title="wajib"
                                            style="color: red;">*</span></label>
                                    <input name="judul" type="text" class="form-control"
                                        value="<?php echo $data['judul'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input name="harga" type="text" class="form-control ninjin" value="<?php echo $data['harga'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori</label>
                                    <select name="id_produk_kategori" class="form-control">
                                        <?php foreach($kategori as $r) : ?>
                                        <option value="<?=$r['id_produk_kategori']?>" <?php echo ($data['id_produk_kategori'] == $r['id_produk_kategori'])? 'selected' : '' ?> ><?=$r['judul']?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Stok</label>
                                    <select name="stok" class="form-control">
                                        <option value="Tersedia" <?php echo ($data['stok'] == 'Tersedia')? 'selected' : '' ?>>Tersedia</option>
                                        <option value="Habis"<?php echo ($data['stok'] == 'Habis')? 'selected' : '' ?>>Habis</option>
                                        <option value="Terbatas" <?php echo ($data['stok'] == 'Terbatas')? 'selected' : '' ?>>Terbatas</option>
                                        <option value="Pre Order" <?php echo ($data['stok'] == 'Pre Order')? 'selected' : '' ?>>Pre Order</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tokopedia</label>
                                    <input name="tokopedia" type="text" class="form-control " value="<?php echo $data['tokopedia'] ?>" placeholder="cth. https://www.tokopedia.com/kostumbasket/bikin-jersey-basket" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bukalapak</label>
                                    <input name="bukalapak" type="text" class="form-control " value="<?php echo $data['bukalapak'] ?>" placeholder="cth. https://www.bukalapak.com/p/sepeda/mtb/3ofyqab-jual-jersey" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lazada</label>
                                    <input name="lazada" type="text" class="form-control " value="<?php echo $data['lazada'] ?>" placeholder="cth. https://www.lazada.co.id/products/kaos-olahraga-jersey.html" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Shopee</label>
                                    <input name="shopee" type="text" class="form-control " value="<?php echo $data['shopee'] ?>" placeholder="cth. https://shopee.co.id/Jersey-Sepeda-Roadbike" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blibli</label>
                                    <input name="blibli" type="text" class="form-control " value="<?php echo $data['blibli'] ?>" placeholder="cth. https://www.blibli.com/p/rochester-jersey" >
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <br />
                                    <input type="file" name="lopoFile" id="lopoFile" class="form-control ">
                                    <p style="margin-top: 5px;margin-bottom:0;" class="help-block">*) Ukuran Gambar
                                        Minimal Lebar 750px dan Tinggi 350px</p>
                                    <p class="help-block">*) Maksimal Size Gambar 2MB</p>
                                    <img style="height: 150px;"
                                        src="../images/produk/small/<?php echo $data['gambar'] ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <textarea id="ckeditor" name="deskripsi"><?php echo $data['deskripsi'] ?></textarea>
                                </div>
                            </div>

                            <!-- <div class="col-md-12" style="margin-bottom:10px">
                                <div class="box-body table-responsive"
                                    style="border: 1px solid #bfbfbf;min-height: 300px;padding:10px">
                                    <label for="exampleInputFile" id="gallery_produk">Gambar Lainnya</label><br>
                                                
                                    <a href="produk-addgallery-<?=$data['id_produk']?>" class="btn btn-info">Tambah Gambar</a>
                                    <div class="form-group">
                                        <div class="row">
                                            <?php
                                                foreach($gallery as $tsubpro):
                                            ?>
                                            <div class="col-md-2 col-xs-12"
                                                style="height: 200px;overflow: hidden;margin: 10px 0px;">
                                                <div class="photo" style="margin-bottom:10px">
                                                    <a href="#"
                                                        style="width: 100%; height: 150px;overflow: hidden;float: left;overflow: hidden;">
                                                        <img src="../images/gallery_produk/<?php echo "$imgname1-$tsubpro[gambar]"; ?>"
                                                            style="width: 100%; min-height: 150px;overflow: hidden;">
                                                    </a>
                                                </div>
                                                <br />
                                                <a style="margin-top:10px" class="btn btn-warning"
                                                    href="<?php echo $module; ?>-editgallery-<?php echo $tsubpro['id_gallery']; ?>">Edit</a>
                                                |
                                                <a style="margin-top:10px" class="btn btn-danger"
                                                    onClick="javascript: return confirm('Data yang Sudah di Hapus TIDAK BISA Dikembalikan Kembali. Apakah Anda yakin ingin Menghapus Data Ini!!');"
                                                    href='produk-gallery-delete-<?php echo $tsubpro['id_gallery']; ?>-<?php echo $data['id_produk']; ?>'>Hapus</a>
                                            </div>
                                            <?php
                                                endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-md-12">
                                <div class="alert alert-primary" role="alert">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="icon ion-ios-information alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                        <span><strong>SEO (Search Engine Optimation)</strong></span>
                                    </div><!-- d-flex -->
                                </div><!-- alert -->

                                <!-- Tab panes -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc"
                                            role="tab" aria-controls="desc" aria-selected="true">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="keyword-tab" data-toggle="tab" href="#keyword"
                                            role="tab" aria-controls="profile" aria-selected="false">Keyword</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="desc" role="tabpanel"
                                        aria-labelledby="desc-tab">
                                        <textarea rows="4" name="description" class="form-control"
                                            placeholder="SEO Description"><?php echo $data['description'] ?></textarea>
                                    </div>
                                    <div class="tab-pane fade" id="keyword" role="tabpanel"
                                        aria-labelledby="keyword-tab">
                                        <textarea rows="4" name="keyword" class="form-control"
                                            placeholder="SEO Keyword"><?php echo $data['keyword'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                    </div><!-- /.card-body -->
                    <div class="card-footer pb-5">
                        <button type="submit" class="mb-2 btn btn-success float-left">Simpan</button>
                        <input type="button" class="mb-2 btn btn-secondary float-right" value="Kembali"
                            onclick="location.href='<?php echo $module; ?>' ">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
    break;
	case "addgallery":
?>
<form action="produk-gallery" method="POST"
    enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="galeri">
                </div>
                <div class="form-group ">
                    <input type="hidden" name="ids" value="<?php echo $id ?>">
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
	case "editgallery":
	
?>
<form action="produk-gallery" method="POST"
    enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="<?php echo $data['judul'] ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $data['id_gallery'] ?>">
                    <input type="hidden" name="idm" value="<?php echo $data['id_produk']; ?>">
                    <label for="">Gambar</label>
                    <input type="file" name="nyanpload" class="form-control">
                    <br><br>
                    <img style="height:300px" src="../images/gallery_produk/<?php echo $imgname1."-".$data['gambar']?>">
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
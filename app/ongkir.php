<?php $this->layout('template') ?>
<style>
/*
    #footer .footer-top {
    position: absolute;
    bottom: 0;
    padding: 30px 0 0px 0;
    background: #757475;
    width: 100%;
}
*/
</style>
<section class="bg-abu martop ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>CEK ONGKIR</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="">
                    <img src="images/<?=$data['gambar']?>" alt="<?=$data['title']?>" class="w-100" >
                </div>
                <div class="box-order">
                    <?=$data['deskripsi']?>
                </div>
                
            </div>
        </div>
        <div class="row album-photos  d-flex flex-wrap">
            
            <div class="col-12 col-md">
                <div class="form-group">
                    <label for="">Provinsi</label>
                    <select class="form-control" name="" id="provinsi">
                        <option value="">--Pilih Provinsi--</option>
                        <?php foreach($provinsi as $row)  : ?>
                        <option value="<?=$row['province_id']?>"><?= $row['province']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="form-group">
                    <label for="">Kota</label>
                    <select class="form-control" name="" id="kota" disabled>
                        <option value="">-- Pilih Kota --</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="form-group">
                    <label for="">Kecamatan</label>
                    <select class="form-control" name="" id="kecamatan" disabled>
                        <option value="">-- Pilih Kecamatan --</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="form-group">
                    <label for="">Berat Kiriman (gram)</label>
                    <input type="number" min="0" class="form-control" id="berat">
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="form-group">
                    <label for="">Kurir</label>
                    <select class="form-control" name="" id="kurir" disabled>
                        <option value="">--Pilih Kurir--</option>
                        <option value="jne">JNE</option>
                        <option value="tiki">Tiki</option>
                        <option value="pos">POS</option>
                        <option value="ninja">Ninja</option>
                        <option value="sicepat">Si Cepat</option>
                        <option value="anteraja">Anter Aja</option>
                        <option value="j&t">J&T</option>
                        <option value="wahana">Wahana</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12" id="list-ongkir">
            </div>
            <!-- <div data-theme="light" id="rajaongkir-widget"></div>
            <script type="text/javascript" src="//rajaongkir.com/script/widget.js"></script> -->
        </div>
    </div>
</section>


<script>
    let prop = document.querySelector('#provinsi');
    let prop2 = document.querySelector('#kota');
    let keca = document.querySelector('#kecamatan');
    let berat = document.querySelector('#berat');
    let loader = '<option>Sedang Memuat....</option>';


    // berat.addEventListener('change', function () {
    //     document.getElementById("kurir").removeAttribute("disabled");
    // })


    prop.addEventListener('change', function () {
        document.getElementById('kota').innerHTML = loader;
        let id = document.querySelector('#provinsi').value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("kota").innerHTML = this.responseText;
                document.getElementById("kota").removeAttribute("disabled");
            }
        };
        xhttp.open("POST", "kota", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id);
    });
    
    prop2.addEventListener('change', function () {
        document.getElementById('kecamatan').innerHTML = loader;
        let id = document.querySelector('#kota').value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("kecamatan").innerHTML = this.responseText;
                document.getElementById("kecamatan").removeAttribute("disabled");
            }
        };
        xhttp.open("POST", "kecamatan", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id);
    })

    keca.addEventListener('change', function () {
        document.getElementById("kurir").removeAttribute("disabled");
    })


    document.querySelector('#kurir').addEventListener('change', function () {

        let loader = '<label class="mt-4 alert alert-secondary w-100">Sedang Memuat Data Ongkos Kirim....</label>';

        let kota = document.getElementById("kecamatan").value;
        let kurir = document.getElementById("kurir").value;
        let berat = document.getElementById("berat").value;

        document.getElementById('list-ongkir').innerHTML = loader;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("list-ongkir").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "ongkir", true);
        //xhttp.send();
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("kota=" + kota + "&berat=" + berat + "&kurir=" + kurir);
    })


    function ribuan(uang) {
        var reverse = uang.toString().split('').reverse().join(''),
            uang = reverse.match(/\d{1,3}/g);
        uang = uang.join('.').split('').reverse().join('');
        return uang;
    }


</script>
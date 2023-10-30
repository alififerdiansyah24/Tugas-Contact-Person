<?php
$obj_agama = new Agama(); //ciptakan object dari class Agama
$rs = $obj_agama->index(); //panggil fungsi index untuk mendapatkan data agama person
//buat array gender person
$ar_gender = ['Laki-laki','Perempuan']; //buat array gender person
//-------------proses edit data---------------
$id = $_REQUEST['id']; //tangkap request id di url
$obj_person = new Person(); //ciptakan object dari class Produk
if(!empty($id)){
    //panggil fungsi untuk menampilkan data lama yang ingin diubah di form
    $row = $obj_person->getPerson($id); //mode edit data, form terisi data lama 
}
else{
    $row = []; //mode input data baru, form tetap dalam keadaan kosong
}
?>
<div class="container px-5 my-5">
    <h3>Form Person</h3>
    <form id="contactForm" method="POST" action="person_controller.php"> 
        <div class="form-floating mb-3">
            <input class="form-control" name="nama" value="<?= $row['nama']?>" id="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
            <label for="namaLengkap">Nama Lengkap</label>
            <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jenis Kelamin</label>
            <?php
            foreach($ar_gender as $gender){
                //--------proses edit kondisi produk-------
                $cek = ($gender == $row['gender']) ? "checked" : "" ;
            ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="<?= $gender ?>" type="radio"  name="gender" data-sb-validations="required" />
                <label class="form-check-label" for="<?= $gender ?>"><?= $gender ?></label>
            </div>
            <?php } ?>
            <div class="invalid-feedback" data-sb-feedback="gender:required">One option is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="tmpt_lahir" value="<?= $row['tmpt_lahir']?>" id="tempatLahir" type="text" placeholder="Tempat Lahir" data-sb-validations="required" />
            <label for="tempatLahir">Tempat Lahir</label>
            <div class="invalid-feedback" data-sb-feedback="tempatLahir:required">Tempat Lahir is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>" id="tanggalLahir" type="date" placeholder="Tanggal Lahir" data-sb-validations="required" />
            <label for="tanggalLahir">Tanggal Lahir</label>
            <div class="invalid-feedback" data-sb-feedback="tanggalLahir:required">Tanggal Lahir is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="alamat" id="alamat" type="text" placeholder="Alamat " data-sb-validations="required" />
            <label for="alamat">Alamat </label>
            <div class="invalid-feedback" data-sb-feedback="alamat:required">Alamat is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="hp" value="<?= $row['hp'] ?>" id="noHp" type="text" placeholder="No. HP" data-sb-validations="required" />
            <label for="noHp">No. HP</label>
            <div class="invalid-feedback" data-sb-feedback="noHp:required">No. HP is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="email" value="<?= $row['email'] ?>" id="email" type="email" placeholder="Email" data-sb-validations="required,email" />
            <label for="email">Email</label>
            <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email Email is not valid.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="asal_kampus" value="<?= $row['asal_kampus'] ?>" id="asalKampus" type="text" placeholder="Asal Kampus" data-sb-validations="required" />
            <label for="asalKampus">Asal Kampus</label>
            <div class="invalid-feedback" data-sb-feedback="asalKampus:required">Asal Kampus is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="sosmed" value="<?= $row['sosmed'] ?>" id="sosmed" type="text" placeholder="Sosmed" data-sb-validations="required" />
            <label for="sosmed">Sosmed</label>
            <div class="invalid-feedback" data-sb-feedback="sosmed:required">Sosmed is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="agama_id" id="agama" aria-label="Agama">
                <option value="-- Pilih Agama --">-- Pilih Agama --</option>
                <?php
                foreach($rs as $agama){
                    //--------proses edit jenis produk-------
                    $sel = ($agama['id'] == $row['agama_id']) ? "selected" : "" ;
                ?>    
                    <option value="<?= $agama['id'] ?>" <?= $sel ?>><?= $agama['nama'] ?></option>
                <?php } ?>
            </select>
            <label for="agama">Agama</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="foto" id="foto" type="text" placeholder="Foto " data-sb-validations="" />
            <label for="foto">Foto </label>
        </div>
        
        <div class="text-center">
        <?php
        if(empty($id)){ //-----mode input data baru form kosong & tombol simpan--------
        ?>
            <button class="btn btn-primary" name="proses" type="submit" value="simpan">Simpan</button>
        <?php
        }
        else{ //-----mode edit data lama form terisi data lama & tombol ubah--------
        ?>
            <button class="btn btn-success" name="proses" type="submit" value="ubah">Ubah</button>
            <input type="hidden" name="idx" value="<?= $id ?>" />
        <?php } ?>
            <a href="index.php?hal=person_list" class="btn btn-info" name="unproses">Kembali</a>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
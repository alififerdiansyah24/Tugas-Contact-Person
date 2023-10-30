<?php
$id = $_REQUEST['id']; //tangkap request id di URL
$model = new Person(); //ciptakan object dari class Person
$rs = $model->getPerson($id); // panggil fungsi u/ mendetailkan produk
?>
<div class="card" style="width: 18rem; ">
<?php
  if(!empty($rs['foto'])){
  ?>
	<img src="img/<?= $rs['foto'] ?>" class="card-img-top" />
  <?php
  }
  else{
  ?>
  <img src="img/nophoto.png" class="card-img-top" />
  <?php } ?>
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama'] ?></h5>
    <p class="card-text">
        Jenis Kelamin: <?= $rs['gender'] ?> <br/>
        Tempat Lahir: <?= $rs['tmpt_lahir'] ?> <br/>
        Tanggal Lahir: <?= $rs['tgl_lahir'] ?> <br/>
        Alamat: <?= $rs['alamat'] ?> <br/>
        No. HP: <?= $rs['hp'] ?> <br/>
        Email: <?= $rs['email'] ?> <br/>
        Asal Kampus: <?= $rs['asal_kampus'] ?> <br/>
        Sosial Media: <?= $rs['sosmed'] ?> <br/>
        Agama: <?= $rs['agama'] ?> <br/>
      
    </p>
    <a href="index.php?hal=person_list" class="btn btn-primary">Kembali</a>
  </div>
</div>
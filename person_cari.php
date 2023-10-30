
<?php
//buat array scalar judul kolom
 $ar_judul = ['NO','NAMA','GENDER','TEMPAT LAHIR','TANGGAL LAHIR','ALAMAT','HP',
                            'EMAIL','ASAL KAMPUS','SOSMED','AGAMA','FOTO','ACTION'];
//ciptakan object dari class Person
$obj_person = new Person();
$keyword = $_GET['keyword'];
//panggil fungsionalitas terkait
$rs = $obj_person->cari($keyword);
?>
<h3>Daftar Pencarian Person</h3>
<a href="index.php?hal=person_form" class="btn btn-primary">Tambah</a>
<br>
<table class="table table_striped">
	<thead>
		<tr>
			<?php
               		foreach($ar_judul as $jdl){
					echo '<th>'.$jdl.'</th>';
				}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach($rs as $person){
        ?>   
			<tr>
				<td><?= $no ?></td>
				<td><?= $person['nama'] ?></td>
				<td><?= $person['gender'] ?></td>
				<td><?= $person['tmpt_lahir'] ?></td>
				<td><?= $person['tgl_lahir'] ?></td>
				<td><?= $person['alamat'] ?></td>
				<td><?= $person['hp'] ?></td>
				<td><?= $person['email'] ?></td>
				<td><?= $person['asal_kampus'] ?></td>
				<td><?= $person['sosmed'] ?></td>
				<td><?= $person['agama'] ?></td>
				<td width="25%">
				<?php
					if(!empty($person['foto'])){
					?>
						<img src="img/<?= $person['foto'] ?>" width="50%" />
					<?php
					}
					else{
					?>
						<img src="img/nophoto.png" width="50%" />
					<?php } ?>	
				</td>
                <td>
					<form method="POST" action="person_controller.php">
					<a href="index.php?hal=person_detail&id=<?= $person['id'] ?>" 
					   title="Detail Person" class="btn btn-info">
						<i class="bi bi-eye"></i>
					</a>
					<a href="index.php?hal=person_form&id=<?= $person['id'] ?>" 
					   title="Ubah Person" class="btn btn-warning">
						<i class="bi bi-pencil"></i>
					</a>
					<button type="submit" title="Hapus Person" class="btn btn-danger btn-md"
					    name="proses" value="hapus" onclick="return confirm('Anda Yakin diHapus?')">
						<i class="bi bi-trash"></i>
					</button>
					<input type="hidden" name="id" value="<?= $person['id'] ?>" /> 
					</form>
				</td>
			</tr>
        <?php    
		$no++;
		}	
		?>
	</tbody>
</table>
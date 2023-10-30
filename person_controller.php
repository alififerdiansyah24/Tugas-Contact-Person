<?php
include_once 'koneksi.php';
include_once 'models/Person.php';
//1. Tangkap request form (dari name2 element form)
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmpt_lahir = $_POST['tmpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$asal_kampus = $_POST['asal_kampus'];
$sosmed = $_POST['sosmed'];
$agama_id = $_POST['agama_id'];
$foto = $_POST['foto'];
$tombol = $_POST['proses']; //ini untuk keperluan eksekusi sebuah tombol di form
//2. simpan ke sebuah array
$data = [
    $nama, // ? 1
    $gender, // ? 2
    $tmpt_lahir, // ? 3
    $tgl_lahir, // ? 4
    $alamat, // ? 5
    $hp, // ? 6
    $email, // ? 7
    $asal_kampus, // ? 8
    $sosmed, // ? 9
    $agama_id, // ? 10
    $foto, // ? 11
];
//3. eksekusi tombol 
$obj_person = new Person();
switch ($tombol) {
    case 'simpan':
        $obj_person->simpan($data);
        break;
    case 'ubah': 
        $data[] = $_POST['idx']; ; // tambah array ? ke-12 dari hidden field idx
        $obj_person->ubah($data); break;
    case 'hapus': $obj_person->hapus($_POST['id']); break; //$_POST['id'] dari hidden field di tombol hapus

    default:
        header('location:index.php?hal=person_list');
        break;
}
//4. setelah selesai arahkan ke halaman produk
header('location:index.php?hal=person_list');

//----------proses pencarian data---------------
$tombol_cari = $_GET['proses_cari']; // untuk keperluan eksekusi sebuah tombol di form

if(isset($tombol_cari)){
    $obj_person->cari($_GET['keyword']); 
    header('location:index.php?hal=person_cari');
}
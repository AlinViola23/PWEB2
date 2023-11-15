<?php
include '../classes/database.php';

$db=new database();

$aksi=$_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_dosen($_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['alamat']);
    header("location: tampil_dsn.php?pesan=sukses");
}
else if ($aksi=="update_dosen"){
    $db->update_dosen($_POST['id'],$_POST['nidn'],$_POST['nama'],$_POST['tempat_lahir'],$_POST['tanggal_lahir'],$_POST['jenis_kelamin'],$_POST['agama'],$_POST['alamat']);
    header("location: tampil_dsn.php?pesan=simpan&id=".$_POST['id']);
} 
else if($aksi=="hapus_dosen"){
    $db->hapus_dosen($_GET['id']);
    header("location: tampil_dsn.php?pesan=selesei&id=".$_POST['id']);
}
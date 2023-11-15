<?php
include '../classes/database.php';

$db=new database();

$aksi=$_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_mhs($_POST['nama'], $_POST['nim'], $_POST['alamat'], $_POST['jenis_kelamin']);
    header("location: tampil_mhs.php?pesan=sukses");
}
else if ($aksi=="update"){
    $db->update($_POST['id'],$_POST['nama'],$_POST['nim'],$_POST['alamat'], $_POST['jenis_kelamin']);
    header("location: tampil_mhs.php?pesan=simpan&id=".$_POST['id']);
} 
else if($aksi=="hapus"){
    $db->hapus($_GET['id']);
    header("location: tampil_mhs.php?pesan=selesei&id=".$_POST['id']);
}

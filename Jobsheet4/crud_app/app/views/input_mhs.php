<?php
include '../classes/database.php';
$db= new database();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobsheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-3 py-3">
 <?php
 include '../views/navbar.php';
 ?>
 <br>
<h3>Tambah Data Mahasiswa</h3>
<a class= "btn btn-primary" href="tampil_mhs.php">Kembali</a>
<br>
<br>
<form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" cols="30" rows="5" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control">
            </td>
        </tr>
        <tr>
        <td>
        <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </td>
        </tr> 
    </table>
</form>
</div>
</form>
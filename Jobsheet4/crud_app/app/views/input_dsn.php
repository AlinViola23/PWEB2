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
<h3>Tambah Data Dosen</h3>
<a class= "btn btn-primary" href="tampil_dsn.php">Kembali</a>
<br>
<br>
<form action="proses_dsn.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>
            <label for="nidn" class="form-label">NIDN</label>
            <input type="text" name="nidn" class="form-control">
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
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
            <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control">
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
            <label for="agama" class="form-label">agama</label>
            <input type="text" name="agama" class="form-control">
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
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </td>
        </tr>
    </table>
</form>
    </div>
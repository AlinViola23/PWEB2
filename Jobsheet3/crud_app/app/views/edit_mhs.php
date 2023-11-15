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

<h3>Edit Data Mahasiswa</h3>
<a class= "btn btn-primary" href="tampil_mhs.php">Kembali</a>
<br>
<br>
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach ($db->edit($_GET['id']) as $d)
    ?>
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="nim" value="<?php echo $d['nim'] ?>">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'] ?>"></td>
        </tr>
        <tr>
        <td>
            <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
        </td>
        </tr>
    </table>
</form>
</div>
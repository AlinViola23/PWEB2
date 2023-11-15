<?php

include '../classes/database.php';
$db=new database();

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
 <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Data berhasil  disimpan.</a>
            </div>
        <?php
            header("refresh:2,url=tampil_dsn.php");
        } else if (isset($_GET['pesan']) && $_GET['pesan'] == 'simpan') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Perubahan berhasil disimpan.</a>
            </div>
        <?php
            header("refresh:2,url=tampil_dsn.php");
        }
        else if (isset($_GET['pesan']) && $_GET['pesan'] == 'selesei') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Data berhasil dihapus.</a>
            </div>
        <?php
            header("refresh:2,url=tampil_dsn.php");
        }
        ?>

<h3>Data Dosen</h3>
<a class="btn btn-primary" href="input_dsn.php">Tambah Dosen</a>
<br>
<br>
<table class="table">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_dosen() as $x){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn']?></td>
            <td><?php echo $x['nama']?></td>
            <td><?php echo $x['tempat_lahir']?></td>
            <td><?php echo $x['tanggal_lahir']?></td>
            <td><?php echo $x['jenis_kelamin']?></td>
            <td><?php echo $x['agama']?></td>
            <td><?php echo $x['alamat']?></td>
            <td>
                <a class="btn btn-warning" href="edit_dsn.php?id=<?php echo $x['id']; ?>&aksi=edit_dosen">Edit</a>
                <a class="btn btn-danger" href="proses_dsn.php?id=<?php echo $x['id']; ?>&aksi=hapus_dosen" onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</div>
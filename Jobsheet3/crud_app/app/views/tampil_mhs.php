<?php
//memanggil class databse
include '../classes/database.php';
//instansiasi class database
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
<h3>Data Mahasiswa</h3>
<a class="btn btn-primary" href="input_mhs.php">Tambah Mahasiswa</a>
<br>
<br>
<table class="table">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis kelamin</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_mahasiswa() as $x){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim']?></td>
            <td><?php echo $x['nama']?></td>
            <td><?php echo $x['alamat']?></td>
            <td><?php echo $x['jenis_kelamin']?></td>
            <td>
                <a class="btn btn-warning" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</div>

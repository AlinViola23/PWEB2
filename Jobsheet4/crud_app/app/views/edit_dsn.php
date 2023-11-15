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
<h3>Edit Data Dosen</h3>
<a class= "btn btn-primary" href="tampil_dsn.php">Kembali</a>
<br>
<br>
<form action="proses_dsn.php?aksi=update_dosen" method="post">
    <?php
    foreach ($db->edit_dosen($_GET['id']) as $d)
    ?>
    <table>
        <tr>
            <td>
                <label for="nidn" class="form-label">NIDN</label>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="nidn" class="form-control" value="<?php echo $d['nidn'] ?>">
            </td>
        </tr>
        <tr>
            <td>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $d['nama'] ?>">
        </td>
        </tr>
        <tr>
            <td>
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $d['tempat_lahir'] ?>">
        </td>
        </tr>
        <tr>
            <td>
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $d['tanggal_lahir'] ?>">
        </td>
        </tr>
        <tr>
            <td>
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $d['jenis_kelamin'] ?>">
        </td>
        </tr>
        <tr>
            <td>
            <label for="agama" class="form-label">Agama</label>
            <input type="text" name="agama" class="form-control" value="<?php echo $d['agama'] ?>">
        </td>
        </tr>
        <tr>
            <td>
            <label for="alamat" class="form-label">Alamat</label>    
            <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $d['alamat'] ?></textarea>
        </td>
        </tr>
        <tr>
            <td>
            <br>    
            <input type="submit" value="Simpan" class="btn btn-primary">
        </td>
        </tr>
    </table>
</form>
</div>
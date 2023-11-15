<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';//dihubungkan ke views
require '../../index.php';

//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$dosenController=new DosenController($db);
$dosen=$dosenController->getAllDosen();
?>


 <br>
 <!-- <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Data berhasil  disimpan.</a>
            </div>
        <?php
            header("refresh:2,url=dosen");
        } else if (isset($_GET['pesan']) && $_GET['pesan'] == 'simpan') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Perubahan berhasil disimpan.</a>
            </div>
        <?php
            header("refresh:2,url=dosen");
        }
        else if (isset($_GET['pesan']) && $_GET['pesan'] == 'selesei') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Data berhasil dihapus.</a>
            </div>
        <?php
            header("refresh:2,url=dosen");
        }
        ?> -->
<div>
<h3>Data Dosen</h3>
<a class= "btn btn-primary" href="tambahdosen">Tambah Dosen</a>
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
    foreach($dosen as $x){
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
                <a class="btn btn-warning" href="editdosen/<?php echo $x['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapusdosen/<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
            </td>
        </tr>
        <?php
    }
?>
</table>
</div>
</div>
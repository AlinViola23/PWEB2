<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';//dihubungkan ke views
require '../../index.php';

//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$mahasiswaController=new MahasiswaController($db);
$mahasiswa=$mahasiswaController->getAllMahasiswa();
?>


 <br>
 <!-- <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Data berhasil  disimpan.</a>
            </div>
        <?php
            header("refresh:2,url=mahasiswa");
        } else if (isset($_GET['pesan']) && $_GET['pesan'] == 'simpan') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Perubahan berhasil disimpan.</a>
            </div>
        <?php
            header("refresh:2,url=mahasiswa");
        }
        else if (isset($_GET['pesan']) && $_GET['pesan'] == 'selesei') {
        ?>
            <div class="alert alert-success mx-auto text-center" role="alert">
                Success! <a href="#" class="alert-link">Data berhasil dihapus.</a>
            </div>
        <?php
            header("refresh:2,url=mahasiswa");
        }
        ?> -->
<div>
<h3>Data Mahasiswa</h3>
<a class= "btn btn-primary" href="tambah">Tambah Mahasiswa</a>
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
    foreach($mahasiswa as $x){
        ?>
        <tr> 
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim']?></td>
            <td><?php echo $x['nama']?></td>
            <td><?php echo $x['alamat']?></td>
            <td><?php echo $x['jenis_kelamin']?></td>
            <td>
                <a class="btn btn-warning" href="edit/<?php echo $x['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus/<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
            </td>
        </tr>
        <?php
    }
?>
</table>
</div>
</div>
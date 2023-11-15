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


<h3>Tambah Data Mahasiswa</h3>
<a class= "btn btn-primary" href="mahasiswa">Kembali</a>
<br>
<br>
<form action="proses_tambah?pesan" method="post">
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
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        </td>
        </tr> 
    </table>
</form>
</div>
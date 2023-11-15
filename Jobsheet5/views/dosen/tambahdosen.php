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

<h3>Tambah Data Dosen</h3>
<a class= "btn btn-primary" href="dosen">Kembali</a>
<br>
<br>
<form action="proses_tambahdosen" method="post">
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
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
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
            <label for="agama" class="form-label">Agama</label>
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
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        </td>
        </tr> 
    </table>
</form>
</div>
<?php

 include_once '../../config.php';
 include_once '../../controllers/MahasiswaController.php';
  require '../../index.php';

 $database= new database();
 $db = $database->getKoneksi();

 if (isset($_GET['id'])) {
    $id = $_GET ['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if(isset($_POST['submit'])) {
            $nama=$_POST['nama'];
            $nim=$_POST['nim'];
            $alamat=$_POST['alamat'];
            $jenis_kelamin=$_POST['jenis_kelamin'];

            $result = $mahasiswaController->updateMahasiswa($id, $nama, $nim, $alamat, $jenis_kelamin);
            
            if($result) {
                header("location: /Jobsheet5/mahasiswa?pesan=simpan&id=".$_POST['id']);
            }
            else {
                header("location:edit");
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>


<h3>Edit Data Mahasiswa</h3>
<a class= "btn btn-primary" href="/Jobsheet5/mahasiswa">Kembali</a>
<br>
<br>
<?php
if($mahasiswaData) {
?>

    <form action="" method="post">
        <?php
        foreach ($mahasiswaData as $d => $value) {
        ?>
        <table>
            <tr>
                <td width="100">
                    <?php
                    echo $d;
                    ?>
                </td>
                <td>
                    <label for="<?php echo $d ?>" class="form-label" ></label> 
                    <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>" class="form-control">
                </td>
            </tr>
            <?php
        }
            ?>
            <tr>
            <td></td>
                <td><br><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>
<?php
}
?>

<?php

 include_once '../../config.php';
 include_once '../../controllers/DosenController.php';
 require '../../index.php';

 $database= new database();
 $db = $database->getKoneksi();

 if (isset($_GET['id'])) {
    $id = $_GET ['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if(isset($_POST['submit'])) {
            $nidn=$_POST['nidn'];
            $nama=$_POST['nama'];
            $tempat_lahir=$_POST['tempat_lahir'];
            $tanggal_lahir=$_POST['tanggal_lahir'];
            $jenis_kelamin=$_POST['jenis_kelamin'];
            $agama=$_POST['agama'];
            $alamat=$_POST['alamat'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
            
            if($result) {
                header("location: /Jobsheet5/dosen");
            }
            else {
                header("location:editdosen");
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>

<h3>Edit Data Dosen</h3>
<a class= "btn btn-primary" href="/Jobsheet5/views/dosen/index.php">Kembali</a>
<br>
<br>
<?php
if($dosenData) {
?>

    <form action="" method="post">
        <?php
        foreach ($dosenData as $d => $value) {
        ?>
        <table>
            <tr>
                <td width="100">
                    <?php
                    echo $d;
                    ?>
                </td>
                <td>
                    <!-- <label for="<?php echo $d ?>" value="<?php echo $value ?>" class="form-label"></label>  -->
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

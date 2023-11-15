 <?php

 class Mahasiswa{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllMahasiswa(){
        $query="select *from mahasiswa";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMahasiswa($nama,$nim,$alamat,$jenis_kelamin)
    {
        $query="insert into mahasiswa (nama,nim,alamat,jenis_kelamin) values ('$nama','$nim', '$alamat', '$jenis_kelamin')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function getMahasiswaById($id)
    {
        $query="select * from mahasiswa where id=$id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMahasiswa($id, $nama, $nim, $alamat, $jenis_kelamin)
    {
        $query="update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat', jenis_kelamin='$jenis_kelamin' where id='$id'";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function deleteMahasiswa($id){
        $query = "delete from mahasiswa where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
<?php

 class Dosen
 {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllDosen(){
        $query="select *from dosen";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nidn,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat)
    {
        $query="insert into dosen (nidn,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat) values ('$nidn','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function getDosenById($id)
    {
        $query="select * from dosen where id=$id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDosen($id, $nidn, $nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama, $alamat)
    {
        $query="update dosen set nidn='$nidn', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat' where id='$id'";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function deleteDosen($id){
        $query = "delete from dosen where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
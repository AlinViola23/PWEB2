<?php

class database {
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db= "akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }
    function tampil_mahasiswa(){
        $data=mysqli_query($this->koneksi, "select * from mahasiswa");//konstanta
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil; //membuat perulangan untuk memanggil data
    }
    function tambah_mhs($nama, $nim, $alamat, $jenis_kelamin){
        mysqli_query($this->koneksi, "insert into mahasiswa (nama,nim,alamat,jenis_kelamin) values ('$nama', '$nim', '$alamat', '$jenis_kelamin')");
    }
    function edit($id)
    {
        $data=mysqli_query($this->koneksi, "select * from mahasiswa where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function update($id, $nama, $nim, $alamat, $jenis_kelamin)
    {
        mysqli_query($this->koneksi, "update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat', jenis_kelamin='$jenis_kelamin' where id='$id'");
    }
    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }
    function tampil_dosen(){
        $data=mysqli_query($this->koneksi, "select * from dosen");
        while ($d=mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tambah_dosen($nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
        mysqli_query($this->koneksi, "insert into dosen (nidn,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat) values ('$nidn', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat')");
    }
    function edit_dosen($id)
    {
        $data=mysqli_query($this->koneksi, "select * from dosen where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function update_dosen($id, $nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat' where id='$id'");
    }
    function hapus_dosen($id)
    {
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }
}
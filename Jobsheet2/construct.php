<?php
//membuat class
class mahasiswa {
//penulisan properti
    var $nim;
    var $nama;
    var $alamat;

    function __construct()
    {
        return "Saya mahasiswa Teknik Informatika <br>";
    }
    function __destruct()
    {
        return "Politeknik Negeri Cilacap";
    }
    //method untuk menampilkan nama mahasiswa
    function tampil_nama(){
        //isi method
        return "Nama Saya adalah Alin";
    }
    //method untuk menampilkan alamat
    function tampil_alamat(){
        //isi method
        return "Jl. Rawa Bendungan";
    }
    //method untuk menampilkan nim
    function tampil_nim(){
        return "220302028";
    }
    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    }
}


//objek nama mahasiswa
$Mahasiswa=new mahasiswa();
//menampilkan objek di layar
echo $Mahasiswa->tampil_nama(). "<br>";
echo $Mahasiswa->tampil_nim(). "<br>";
echo $Mahasiswa->tampil_alamat(). "<br>";
echo $Mahasiswa->tampil_mahasiswa(). "<br>";
?>
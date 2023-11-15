<?php
//membuat class
class mahasiswa {
//penulisan properti
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama mahasiswa
    function tampil_nama(){
        //isi method
        echo "Nama Saya adalah Alin";
    }
    //method untuk menampilkan alamat
    function tampil_alamat(){
        //isi method
        echo "Jl. Rawa Bendungan";
    }
    //method untuk menampilkan nim
    function tampil_nim(){
        echo "220302028";
    }
}

//membuat class dosen
class Dosen {
    //properti
    var $nama;
    var $nidn;
    var $prodi;

    //method untuk menampilkan nama dosen
    function tampil_nama_dosen(){
        return "Nama Saya adalah Alin";
    }
    //method untuk menampilkan nidn
    function tampil_nidn(){
        return "220302028";
    }
    //method untuk menampilkan prodi
    function tampil_prodi(){
        return "Teknik Informatika";
    }
}

//objek nama mahasiswa
$Mahasiswa=new mahasiswa();
//menampilkan objek di layar
echo $Mahasiswa->tampil_nama(). "<br>";
echo $Mahasiswa->tampil_nim(). "<br>";
echo $Mahasiswa->tampil_alamat(). "<br>";

echo "<br><br>";
//objek nama dosen
$Dosen=new dosen();
//menampilkan objek di layar
echo $Dosen->tampil_nama_dosen(). "<br>";
echo $Dosen->tampil_nidn(). "<br>";
echo $Dosen->tampil_prodi(). "<br>";
?>
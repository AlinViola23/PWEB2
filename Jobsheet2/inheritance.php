<?php

class manusia
{
    public $nama_saya;

    function panggil_nama($saya)
    {
        $this->nama_saya=$saya;
    }
}

//sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa=$mahasiswa;
    }
}

//instanslasi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Alin Viola");
$informatika->panggil_mahasiswa("Pramudita");

//tampilkan isi property
echo "Nama Depan Saya : ". $informatika->nama_saya. "<br>";
echo "Nama Belakang Saya : ". $informatika->nama_mahasiswa. "<br>";
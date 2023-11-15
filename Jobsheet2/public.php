<?php
//membuat class mahasiswa
class mahasiswa{
    //property public
    public $nama;
    private $nim="220302028"; 
    //protected tidak bisa dipanggi diluar classnya tetapi bisa dipanggil diturunannya atau warisannya
    
    //public method
    public function tampilkan_nama(){
        //nilai kembalian
        return "Nama Saya Alin";
    }

    //membuat protected dan privat method
    function tampilkan_nim(){
        return "NIM Saya ". $this->nim; //private dipanggil menggunakan this 
    }
}

//instanslasi objek mahasiswa kedalam variabel $mahasiswa
$Mahasiswa=new mahasiswa();
$nim=new mahasiswa();

//memanggil method tampilkan_nama
echo $Mahasiswa->tampilkan_nama(). "<br>";
echo $nim->tampilkan_nim();
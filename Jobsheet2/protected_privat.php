<?php
//membuat class manusia
class manusia 
{
    //membuat property
    public $nama_saya;
    //properti yang memiliki hak akses protected dapat diakses oleh kelas turunan tetapi tidak langsung dari luar class
    protected $prodi="Teknik Informatika";

    //membuat method class manusia
    public function panggil_nama($saya)//method public digunakan untuk mengembalikan nilai
    {
        return $this->nama_saya=$saya;
    }
    public function panggil_prodi()
    {
        return $this->prodi;
    }

}
//membuat sub class manusia yaitu class mahasiswa
class mahasiswa extends manusia
{
    //membuat property
    public $nama_mahasiswa;
    //properti privat digunakan untuk menyimpan nim dari class mahasiswa dan tidak dapat diakses langsung dari luar kelas
    private $nim="220302028";

    //membuat method class mahasiswa
    public function panggil_mahasiswa($mahasiswa)
    {
        return $this->nama_mahasiswa=$mahasiswa;
    }
    public function panggil_nim()
    {
        return "NIM : ". $this->nim;
    }
}

//instanslasi objek mahasiswa kedalam variabel $informatika
$informatika=new mahasiswa();

$informatika->panggil_nama("Alin Viola");
$informatika->panggil_mahasiswa("Pramudita");

//tampilkan isi property
echo "Nama Saya ". $informatika->nama_saya. " ". $informatika->nama_mahasiswa. " Program Studi ". $informatika->panggil_prodi();
echo "<br>". $informatika->panggil_nim();
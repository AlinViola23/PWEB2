<?php
class HomeController {
    public function home(){
        header("location:http://localhost/Jobsheet5/index.php");
    }
    public function mahasiswa(){
        header("location:http://localhost/Jobsheet5/views/mahasiswa/index.php");
    }
    public function tambah(){
        header("location:http://localhost/Jobsheet5/tambah.php");
    }
    public function proses_tambah(){
        header("location:http://localhost/Jobsheet5/proses_tambah.php");
    }
    public function edit(){
        header("location:http://localhost/Jobsheet5/edit.php");
    }
    public function hapus(){
        header("location:http://localhost/Jobsheet5/hapus.php");
    }
    public function dosen(){
        header("location:http://localhost/Jobsheet5/views/dosen/index.php");
    }
    public function tambahdosen(){
        header("location:http://localhost/Jobsheet5/tambahdosen.php");
    }
    public function proses_tambahdosen(){
        header("location:http://localhost/Jobsheet5/proses_tambahdosen.php");
    }
    public function editdosen(){
        header("location:http://localhost/Jobsheet5/editdosen.php");
    }
    public function hapusdosen(){
        header("location:http://localhost/Jobsheet5/hapusdosen.php");
    }
}
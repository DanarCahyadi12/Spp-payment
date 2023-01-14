<?php
session_start();
class Data{


    public function GetName(){
        return $_SESSION["name"];
    }
    public function GetUsername(){
        return $_SESSION['username'];
    }
    public function GetNIS (){
        return $_SESSION['NIS'];
    }
    public function GetNISN (){
        return $_SESSION['NISN'];
    }
    public function GetKelas (){
        return $_SESSION['kelas'];
    }
    public function GetJurusan (){
        return $_SESSION['jurusan'];
    }
    public function GetKompetensi (){
        return $_SESSION['kompetensi'];
    }
    public function GetProfile(){
        return $_SESSION['profile'];
    }
    public function GetIdStudent(){
        return $_SESSION['id'];
    }

    public function SetPrevImage($img){
        $_SESSION['prevImg'] = $img;
    }

    public function GetPrevImage(){
        return $_SESSION['prevImg'];
    }
}


?>
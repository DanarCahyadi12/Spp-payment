<?php
class Session{
    
    public function SetSession($id,$name,$user,$NIS,$NISN,$jurusan,$kelas,$kompetensi){
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name;
        $_SESSION["username"] = $user;
        $_SESSION["NIS"] = $NIS;
        $_SESSION["NISN"] = $NISN;
        $_SESSION["jurusan"] = $jurusan;
        $_SESSION["kelas"] = $kelas;
        $_SESSION["kompetensi"] = $kompetensi;
    }

    public function SetSessionProfile($img){
        $_SESSION["profile"] = $img;
    }

    public function SetSessionPrevMonth($month){
        $_SESSION['prevMonth'] = $month;
    }

    public function GetSessionPrevMonth(){
        return $_SESSION['prevMonth'];
    }
   
}



?>
<?php 
use FTP\Connection;

include "../backend/Main.php";
include("../backend/connection.php");

class Person extends Main{
    private function exitsData($username,$NIS,$NISN,$password,$name){
        $sql = "SELECT NIS,NISN,username,nama,password FROM student WHERE NIS = '$NIS' OR NISN = '$NISN' OR username = '$username' OR password = '$password' OR nama = '$name'";
        global $conn;
        $res = $conn->query($sql);
        if(mysqli_num_rows($res) > 0){
            $rows = mysqli_fetch_object($res);
            if($rows->username == $username) return $username;
            if($rows->NIS == $NIS) return $NIS;
            if($rows->NISN == $NISN) return $NISN;
            if($rows->password == $password) return $password;
            if($rows->nama == $name) return $name;
        }else{
            return null;
        }

    }
    private function SetDataStudents(){
        if(isset($_POST['submit'])){
            $names = $_POST['fullname'];
            $username = $_POST['username'];
            $NIS = $_POST['NIS'];
            $NISN = $_POST['NISN'];
            $kelas = $_POST['class'];
            $password = $_POST['password'];
            $kompetensi = $_POST['kompetensi'];
            $jurusan = $_POST['jurusan'];
            if(!empty($names) && !empty($username) && !empty($NIS) && !empty($NISN) && !empty($kelas) && !empty($password) && !empty($kompetensi) && !empty($jurusan)){
                $dataExits = $this->exitsData($username, $NIS, $NISN, $password, $names);
                if($dataExits !== null){
                    $this->SetMassage("$dataExits sudah ada dalam data");
                    return;
                }else{
                    $this->InsertIntoDatabase($NIS, $NISN, $names, $kelas, $jurusan, $kompetensi, $username, $password);
                    $this->SetMassage("Data succesfully passed");
                    return;
                }
            }else{
                $this->SetMassage("All data is required");
                return;
                
            }
        }
    }
    public function PassData(){
        $this->SetDataStudents();
    }
    private function InsertIntoDatabase($NIS,$NISN,$nama,$kelas,$jurusan,$kom,$username,$password){
        $sql = "INSERT INTO student (NIS,NISN, nama,kelas,jurusan,kompetensi,username,password) VALUES('$NIS','$NISN','$nama','$kelas','$jurusan','$kom','$username','$password')";
        global $conn;
        $conn->query($sql);
        
    }
    
}





?>
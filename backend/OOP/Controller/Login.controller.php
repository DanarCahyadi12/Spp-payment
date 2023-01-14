<?php
include(dirname(__DIR__).'../Class/Massage.class.php');
include(dirname(__DIR__).'../Class/Connection.class.php');
include(dirname(__DIR__).'../Class/Session.class.php');
$session = new Session();
$massage = new Massage();
class LoginController extends Connection{
    public function Validation($username,$password)
    {
        global $massage;
        global $session;
            if (!empty($username) && !empty($password)) {
                $stmt = $this->GetConnection()->prepare('SELECT * FROM student WHERE username = ?');
                $stmt->bind_param('i',$username);
                $stmt->execute();
                $res = $stmt->get_result();
                $rows = mysqli_fetch_object($res);
                if(empty($rows)){
                    $massage->SetMassage("Wrong password or username");
                }else{
                    if($username == $rows->username && $password == $rows->password){
                        $session->SetSession($rows->idstudent, $rows->nama, $rows->username, $rows->NIS, $rows->NISN, $rows->jurusan, $rows->kelas, $rows->kompetensi);
                        header('Location:views/dashboard.php');
                    }else{
                        $massage->SetMassage("Wrong password or username");
                    }
                }
                $stmt->close();
            } else {

                $massage->SetMassage("Field is requied");
            }
            $this->GetConnection()->close();
            
    }
}


?>
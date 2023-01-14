<?php

include(dirname(__DIR__).'../Controller/Login.controller.php');
$massage = new Massage();
class Login extends LoginController {
    private $username;
    private $password;

    public function login(){
        global $massage;
        if(isset($_POST['submit'])){
            $userame = $_POST['user'];
            $password = $_POST['pass'];
            $this->Validation($userame, $password);
        }
        
    }

}



?>
<?php

class Connection{
    private $hostname = 'localhost';
    private $user = 'root';
    private $password = 'danareksa';
    private $db  = 'spp';
    public $conn;
    public function GetConnection(){
        global $conn;
        $conn = new mysqli($this->hostname, $this->user, $this->password, $this->db);
        return $conn;
    }
    
}



?>
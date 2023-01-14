<?php
class Massage{
    private $massage;
    public function SetMassage($mass){
        $this->massage = $mass;
    }
    public function GetMassage(){
        return $this->massage;
    }
}

?>
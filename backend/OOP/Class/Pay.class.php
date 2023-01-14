<?php 
include(dirname(__DIR__) . "../Controller/Pay.controller.php");





class Pay extends PayController{
    private $month;
    private $user;

    public function PayMonth(){
        if(isset($_POST['submit']) && isset($_GET['month']) && isset($_GET['user'])){
            $this->month = $_GET['month'];
            $this->user = $_GET['user'];
            $this->SetCompletedPayment($this->user, $this->month,1);
            $dates = date("Y-m-d");
            $this->SetHistoryPayment($this->user, $this->month,$dates);
            
        }    }
}

$pay = new Pay();

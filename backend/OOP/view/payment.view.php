<?php 
include(dirname(__DIR__) . "../Class/Pay.class.php");

class Views extends Pay{
    private $month;
    private $student;

    private function SetMonthToPay(){
        if(isset($_GET['month']) && isset($_GET['user'])){
            $months = $this->GetMonth();
            for ($i=0; $i <count($months); $i++) { 
                if($months[$i]->idmonth == $_GET['month']){
                    $this->month = $months[$i]->month;
                    break;
                }
            }
        }
        
    }

    public function GetMonthToPay(){
        return $this->month;
    }
    public function DisplayNotCompletedMonth(){
        $month = $this->GetNotCompletePayment();
        $currentMonth = $this->GetCurrentMonth();
        for ($i=0; $i < count($month); $i++) {
            if($month[$i]->month !== $currentMonth->month){
                $months = $month[$i]->month;
                echo"<li><a class='cursor-text bg-red-400 text-slate-50' >$months <span class='late  italic text-xs'>terlambat</span></a> </li>";
            }else{
                break;
            }
            
        }
    }

    public function DisplayButtonPayment(){
        global $datas;
        $months = $this->GetNotCompletePayment();
        $currentMonth = $this->GetCurrentMonth();
        for ($i=0; $i < count($months) ; $i++) {
            $idMonth = $months[$i]->idmonth;
            $idStudent = $datas->GetIdStudent();
            if($months[$i]->idmonth !== $currentMonth->idmonth){
                echo"<a href=' /WEB SPP/views/pay-page.php?month=$idMonth&user=$idStudent#confirm' class='btn btn-ghost'>Bayar</a>";
                $this->SetMonthToPay();
            }else{
                break;
            }
        }
        
    }

    public function CurrentMonthButton(){
        global $datas;
        $data = $this->GetCurrentMonth();
        $idMonth = $data->idmonth;
        $idStudent = $datas->GetIdStudent();
        if($data->complete == 0){
            echo"<a href='/WEB SPP/views/pay-page.php?month=$idMonth&user=$idStudent#confirm' class='btn btn-ghost'>Bayar</a>";
            $this->SetMonthToPay();
        }else{
            echo"<a href='/WEB SPP/views/pay-page.php' class='btn'>tuntas</a>";
        }
        
    }

    public function DisplayCurrentMonth(){
        $data = $this->GetCurrentMonth();
        $month = $data->month;
        if($data->complete == 0){
            echo"<li><a class=' cursor-text bg-slate-200 text-black'>$month</a></li>";
        }else{
            echo"<li><a class=' cursor-text bg-lime-400 text-white'>$month</a></li>";
        }
    }

    
    public function SetConfirmButtonModal(){
        global $datas;
        $id = $datas->GetIdStudent();
        if(isset($_GET['month'])){
        $idMonth = $_GET["month"];
        $sql = "SELECT month.idmonth,complete FROM iscompletepayment
                INNER JOIN month ON month.idmonth = iscompletepayment.fk_idmonth
                WHERE iscompletepayment.fk_idstudent = $id AND complete = 0 AND iscompletepayment.fk_idmonth = $idMonth";
            $res = $this->GetConnection()->query($sql);
            if(mysqli_num_rows($res) > 0){
                echo "<button class='btn text-white bg-black' name='submit' type='submit'>KONFIRMASI</button>";
            }
        }
       
    }


}



$display = new Views();


?>
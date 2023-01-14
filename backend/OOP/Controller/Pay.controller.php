<?php 
include(dirname(__DIR__) . "../Class/Connection.class.php");
include(dirname(__DIR__) . '../Class/Profile.class.php');
$datas = new Data();
$massage= new Massage();

class PayController extends Connection{

    private $month = array();
    private $data = array();
    
    public function GetCurrentMonth(){
        $monthNow = date("m");
        global $datas;
        $idStudent = $datas->GetIdStudent();
        $sql = "SELECT month.idmonth,month.month,complete FROM iscompletepayment 
                INNER JOIN month ON month.idmonth = iscompletepayment.fk_idmonth 
                WHERE iscompletepayment.fk_idstudent = $idStudent AND iscompletepayment.fk_idmonth = $monthNow";
        $res = $this->GetConnection()->query($sql);
        $rows = mysqli_fetch_object($res);
        return $rows;
    }
    public function GetMonth(){
        $sql = "SELECT * FROM month";
        $res = $this->GetConnection()->query($sql);
        while($rows = mysqli_fetch_object($res)){
            array_push($this->month,$rows);
        }

        return $this->month;

    }
    private function GetDataStudent(){
        $query = "SELECT idstudent,nama FROM student";
        $res = $this->GetConnection()->query($query);
        while($rows = mysqli_fetch_object($res)){
            array_push($this->data, $rows);
        }
        return $this->data;
        
    }

    public function GetNotCompletePayment(){
        $notCompleteArr = array();
        global $datas;
        $id = $datas->GetIdStudent();
        $sql = "SELECT student.idstudent,student.nama,student.NIS,month.idmonth,month.month FROM iscompletepayment
                INNER JOIN student ON student.idstudent = iscompletepayment.fk_idstudent
                INNER JOIN month ON month.idmonth = iscompletepayment.fk_idmonth
                WHERE student.idstudent = $id AND complete = 0 ";
        $res = $this->GetConnection()->query($sql);
        while($rows = mysqli_fetch_object($res)){
            array_push($notCompleteArr, $rows);
        }
        return $notCompleteArr;
    }
    private function SetIsCompleteData(){
        $data = $this->GetDataStudent();
        $month = $this->GetMonth();
        for ($i=0; $i < count($data); $i++) { 
            for ($a=0; $a < count($month); $a++) {
                $idStudent = intval($data[$i]->idstudent);
                $idMonth = intval($month[$a]->idmonth);
                $sql = "INSERT INTO iscompletepayment 
                        (fk_idstudent,fk_idmonth,complete) VALUES($idStudent,$idMonth,0)";
                $this->GetConnection()->query($sql);
                
            }
        }
    }

    public function SetHistoryPayment($user,$month,$date){
        global $massage;
        $sql = "INSERT INTO historypayment (fk_idstudent,fk_idmonth,date) VALUES($user,$month,'$date')";
        $this->GetConnection()->query($sql);
        $massage->SetMassage("<div class='notification w-70  mt-[10px]  bg-lime-400 p-5  flex align-center '>
        <i class='fa-solid fa-check text-2xl text-white mr-5'> </i> 
          <p class=' text-white'>Pembayaran berhasil</p>
      </div>");
        
    }

    public function SetCompletedPayment($user,$month,$complete){
        global $massage;
        $sql = "UPDATE iscompletepayment SET complete = $complete WHERE fk_idstudent = $user AND fk_idmonth = $month";
        $this->GetConnection()->query($sql);
        $massage->SetMassage("<div class='notification w-70  mt-[10px]  bg-lime-400 p-5  flex align-center '>
        <i class='fa-solid fa-check text-2xl text-white mr-5'> </i> 
          <p class=' text-white'>Pembayaran berhasil</p>
      </div>");
    }

}

$payment = new PayController();

?>
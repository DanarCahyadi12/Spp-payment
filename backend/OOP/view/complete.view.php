
<?php 

include(dirname(__DIR__) . '../Class/Profile.class.php');
include(dirname(__DIR__) . '../Class/Connection.class.php');

$datas = new Data();
class Complete extends Connection {

    public function GetCompleteOrNotMonth(){
        global $datas;
        $idStudent = $datas->GetIdStudent();
        $sql = "SELECT month.idmonth,month.month,complete FROM iscompletepayment
                INNER JOIN month ON month.idmonth = iscompletepayment.fk_idmonth
                WHERE iscompletepayment.fk_idstudent = $idStudent";
        $res = $this->GetConnection()->query($sql);
        $index = 0;
        while($rows = mysqli_fetch_object($res)){
            $index++;
            $month = $rows->month;
            $isComplete = $rows->complete;
            if($isComplete == 0){
                echo " <tr>
                <th class='bg-red-400 text-white'>$index</th>
                <td class='bg-red-400 text-white'>$month</td>
                <td class='bg-red-400 text-white'>Belum</td>
              </tr>";
            }else{
                echo "
                <tr>
                <th>$index</th>
                <td>$month</td>
                <td>Sudah</td>
              </tr>
                ";
            }
        }
        

    }

}


$complete = new Complete();



?>
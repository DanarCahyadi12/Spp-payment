<?php
include(dirname(__DIR__) . "../Class/Connection.class.php");
include(dirname(__DIR__) . '../Class/Profile.class.php');
$datas = new Data();
class History extends Connection{
    
    public function GetHistoryPayment(){
        global $datas;
        $idStudent = $datas->GetIdStudent();
        $sql = "SELECT month.idmonth,month.month ,date
                FROM historypayment 
                INNER JOIN month ON month.idmonth = historypayment.fk_idmonth
                WHERE historypayment.fk_idstudent = $idStudent ORDER BY historypayment.fk_idmonth";
        $res = $this->GetConnection()->query($sql);
        $index = 0;
        if (mysqli_num_rows($res) > 0) {
            while($rows = mysqli_fetch_object($res)){
                $index++;
                $splitedDate =  date_parse_from_format('Y-m-d', $rows->date);
                $day = $splitedDate['day'];
                $year = $splitedDate['year'];
                echo "<tr>
                <th>$index</th>
                <td>$rows->month</td>
                <td> $day</td>
                <td>$year</td>
              </tr>";
        
            }
        }
    }
}


?>
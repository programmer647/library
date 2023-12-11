<?php

include_once("connection.php");

$date = date('Y-m-d');

$stmt=$conn->prepare("SELECT * FROM tblloans");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    $loan=$row['LoanID'];
    if ($row["Date_due"]<$date){
        $stmt1=$conn->prepare("UPDATE tblloans SET Overdue=True WHERE LoanID=$loan");
        $stmt1->execute();
    }
	//echo('<option value='.$row['reserveid'].'>'.$row['t'].'</option>');

}



?>
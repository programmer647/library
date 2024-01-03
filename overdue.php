<?php

include_once("connection.php");
include_once("checkoverdue.php");

$stmt = $conn->prepare("SELECT LoanID as loanid, tblbooks.Title as t, tblusers.Forename as f, tblusers.Surname as s, Date_due as d FROM tblloans
INNER JOIN tblbooks 
ON tblbooks.ISBN=tblloans.ISBN
INNER JOIN tblusers 
ON tblusers.UserID=tblloans.UserID where Overdue=True") ;
$stmt->execute();

print_r($row);


echo("Overdue books:");
echo('<br>');

while ($row = $stmt ->fetch(PDO::FETCH_ASSOC))
{
    echo($row['t'].', '.$row['f'].', '.$row['s'].', '.$row['d']);
    echo('</br>');
}




?>
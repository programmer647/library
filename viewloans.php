<?php
include_once("connection.php");

$stmt = $conn->prepare("SELECT LoanID as loanid, tblbooks.Title as t, tblbooks.Author_firstname as auf, tblbooks.Author_surname as aus, tblusers.Forename as f, tblusers.Surname as s, Date_due as d FROM tblloans
INNER JOIN tblbooks 
ON tblbooks.ISBN=tblloans.ISBN
INNER JOIN tblusers 
ON tblusers.UserID=tblloans.UserID ") ;
$stmt->execute();



echo("All books on loan:");
echo('<br>');

while ($row = $stmt ->fetch(PDO::FETCH_ASSOC))
{
    echo($row['t'].', '.$row['auf'].', '.$row['aus'].', '.$row['f'].', '.$row['s'].', '.$row['d']);
    echo('</br>');
}

?>
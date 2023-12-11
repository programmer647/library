<?php

include_once("connection.php");
include_once("checkoverdue.php");

$stmt = $conn->prepare("SELECT * FROM tblloans WHERE Overdue=True;" );
$stmt->execute();

while ($row = $stmt ->fetch(PDO::FETCH_ASSOC))
{
    echo($row['UserID'].', '.$row['ISBN'].', '.$row['Date_loaned'].', '.$row['Date_due']);
}




?>
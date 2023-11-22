<?php

session_start();

include_once("connection.php");

//header("Refresh:2; url= pupildoessubject.php");
echo("Reserved");
print_r($_POST);

$d1=getdate(date("U"));

$d2=

$formatted="$d[year], $d[mon],$d[mday]";
echo "$formatted";

$stmt = $conn->prepare("INSERT INTO Tblreserve (UserID,IBSN,Reserve_until)VALUES (:UserID,:IBSN,:Reserve_until)");

$stmt->bindParam(':UserID', $_SESSION['name']);
$stmt->bindParam(':IBSN', $_POST["IBSN"]);
$stmt->bindParam(':Reserve_until', .date("Y/m/d").);

$stmt->execute();
$conn=null;



?>
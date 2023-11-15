<?php

session_start();

include_once("connection.php");

//header("Refresh:2; url= pupildoessubject.php");
echo("Loaned");
print_r($_POST);

$stmt = $conn->prepare("INSERT INTO Tblloans (UserID,IBSN,Date_loaned)VALUES (:UserID,:IBSN,:Date_loaned)");

$stmt->bindParam(':UserID', $_SESSION['name']);
$stmt->bindParam(':IBSN', $_POST["IBSN"]);
$stmt->bindParam(':Date_loaned', .date("Y/m/d").)

$stmt->execute();
$conn=null;



?>
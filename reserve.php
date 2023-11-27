<?php

session_start();

include_once("connection.php");

//header("Refresh:2; url= pupildoessubject.php");
echo("Reserved");
print_r($_POST);
print_r($_SESSION);
$date = date('Y-m-d');
$newdate = date('Y-m-d', strtotime($date.' + 1 days'));
echo "today is: $date";
echo "<br> and after 5 days is: $newdate";
echo("<br>");

print_r($_SESSION);


$stmt = $conn->prepare("INSERT INTO Tblreserve (UserID,IBSN,Reserve_until)VALUES (:UserID,:IBSN,:Reserve_until)");

$stmt->bindParam(':UserID', $_SESSION['id']);
$stmt->bindParam(':IBSN', $_POST["book"]);
$stmt->bindParam(':Reserve_until', $newdate);

$stmt->execute();
$conn=null;



?>
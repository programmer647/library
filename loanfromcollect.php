<?php

session_start();

include_once("connection.php");

echo("Loaned");
print_r($_POST);

$date = date('Y-m-d');
$newdate = date('Y-m-d', strtotime($date.' + 1 days'));
echo "today is: $date";
echo "<br> and after 5 days is: $newdate";
echo("<br>");





$stmt = $conn->prepare("INSERT INTO Tblloans (UserID,ISBN,Date_loaned,Date_due)VALUES (:UserID,:ISBN,:Date_loaned,:Date_due)");

$stmt->bindParam(':UserID', $_POST['userid']);
$stmt->bindParam(':ISBN', $_POST["isbn"]);
$stmt->bindParam(':Date_loaned', $date);
$stmt->bindParam(':Date_due',$newdate);


$stmt->execute();
$conn=null;



?>

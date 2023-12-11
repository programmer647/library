<?php

session_start();

include_once("connection.php");

echo("Loaned");


$date = date('Y-m-d');
$newdate = date('Y-m-d', strtotime($date.' + 1 days'));
echo "today is: $date";
echo "<br> and after 5 days is: $newdate";
echo("<br>");

print_r($_POST);

echo($_POST['items']);
$reserveid=($_POST['items']);


$stmt=$conn->prepare("SELECT * FROM tblreserve WHERE ReserveID = $reserveid");
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    print_r($row);
    $userid=($row["UserID"]);
    $isbn=($row["ISBN"]);
	//echo('<option value='.$row['reserveid'].'>'.$row['t'].'</option>');

}

echo($userid);

$stmt = $conn->prepare("INSERT INTO Tblloans (UserID,ISBN,Date_loaned,Date_due)VALUES (:UserID,:ISBN,:Date_loaned,:Date_due)");

$stmt->bindParam(':UserID', $userid);
$stmt->bindParam(':ISBN', $isbn);
$stmt->bindParam(':Date_loaned', $date);
$stmt->bindParam(':Date_due',$newdate);


$stmt->execute();


$stmt=$conn->prepare("DELETE FROM  tblreserve WHERE ReserveID = $reserveid");
$stmt->execute();


?> 

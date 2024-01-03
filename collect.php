<?php
include ("connection.php");
session_start(); 
print_r($_SESSION);
if (!isset($_SESSION['name']))
{   
    header("Location:login.php");
}
if ($_SESSION['role']!=2)
{   
    header("Location:home-page.html");
}

?>


<!DOCTYPE html>
<html>
<head>
    
    <title>Collect books</title>
    
</head>
<body>
<form action="loanfromcollect.php" method="post">
<select name = "items">
<?php
include_once('connection.php');

$stmt = $conn->prepare("SELECT tblreserve.ReserveID as reserveid, tblbooks.title as t, tblreserve.ISBN as ISBN, tblreserve.UserID as userid, tblusers.Forename as f, tblusers.Surname as s FROM Tblreserve 
INNER JOIN tblbooks 
ON tblbooks.ISBN=tblreserve.ISBN
INNER JOIN tblusers 
ON tblusers.userID=tblreserve.UserID") ;
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    //print_r($row);
	echo('<option value='.$row['reserveid'].'>'.$row['t'].', '.$row['f'].', '.$row['s'].'</option>');
}
?>


</select>


  <input type="submit" value="Loan">
  
</form>


       
</body>
</html>

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
    
    <title>Page title</title>
    
</head>
<body>
<form action="loan.php" method="post">
<select name = "items">
<?php
include_once('connection.php');


$stmt = $conn->prepare("SELECT * FROM Tblreserve ");
$stmt->execute();



while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row['ReserveID'].'>'.$row['IBSN']'>'.$row["IBSN"].'</option>');
}
?>
</select>


</select>


  <input type="submit" value="Loan">
  
</form>


       
</body>
</html>

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
<!-- <form action="loanbook.php" method="post">
<select name = "items"> -->
<?php
include_once('connection.php');

$stmt = $conn->prepare("SELECT tblbooks.title as t, tblreserve.IBSN as ISBN, tblreserve.UserID as id FROM Tblreserve 
INNER JOIN tblbooks 
ON tblbooks.ISBN=tblreserve.IBSN
INNER JOIN tblusers 
ON tblusers.userID=tblreserve.UserID") ;
$stmt->execute();




while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    print_r($row);
	#echo('<option value='.$row['ReserveID'].'>'.$row['IBSN']'.$row['sn']</option>');
}
?>



</select>


  <input type="submit" value="Loan">
  
</form>


       
</body>
</html>

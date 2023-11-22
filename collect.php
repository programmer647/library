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
<form action=".php" method="post">
<select name = "items">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Tblreserve ORDER BY Reserve_until ASC");
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["UserID"].'>'.$row["IBSN"].', '.$row["Reserve_until"].'</option>');
}
?>
</select>


</select>


  <input type="submit" value="Loan">
  
</form>


       
</body>
</html>

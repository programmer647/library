
<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>

</html>
<body>
<form action="reserve.php" method="post">
<select name = "book">
<?php
 include_once('connection.php');
 $stmt = $conn->prepare("SELECT * FROM Tblbooks ORDER BY Title ASC");
 $stmt->execute();


 while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
 {
 	echo('<option value='.$row["ISBN"].'>'.$row["Title"].', '.$row["Author_firstname"].', '.$row["Author_surname"].'</option>');
 }
?>

</select>

  <input type="submit" value="Reserve">
  
</form>

</body>
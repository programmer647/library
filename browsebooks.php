
<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
<for action="search.php">
  Search for:<input type="text" name="item"><br>
  <input type="radio" name="type" value="title" checked> Title<br>
  <input type="radio" name="type" value="author_surname"> Author surname<br>
  <input type="radio" name="type" value="author_firstname"> Author first name<br>
  <input type="submit" value="Search">

</form>

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
</html>

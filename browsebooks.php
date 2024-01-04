
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

$stmt = $conn->prepare("SELECT ISBN as isbn, Title as t, tblauthors.Author_firstname as auf, tblauthors.Author_surname as aus FROM tblbooks
INNER JOIN tblauthors 
ON tblbooks.AuthorID=tblauthors.AuthorID") ;
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
 {
 	echo('<option value='.$row["isbn"].'>'.$row["t"].', '.$row["auf"].', '.$row["aus"].'</option>');
 }


?>

</select>

  <input type="submit" value="Reserve">
  
</form>

</body>


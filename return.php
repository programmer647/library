<!DOCTYPE html>
<?php
	$connect = new mysqli("localhost", "root", "", "library")  or die(mysqli_error());
?>
<html lang = "eng">
	<head>
			<meta charset = "UTF-8" />
			<link rel = "stylesheet" type = "text/css" href = "css/chosen.css" />
			<style>
			</style>
	</head>
<body>
	<center>
		<h1>Chosen.js</h1>
		<form action="returnprocess.php" method="post">
			<select name="book" class = "chosen-select" > 
				<?php
				include_once("connection.php");
				$stmt = $conn->prepare("SELECT tblloans.Loanid as loanid FROM Tblloans 
INNER JOIN tblbooks 
ON tblbooks.ISBN=tblloans.ISBN
INNER JOIN tblusers 
ON tblusers.UserID=tblloans.UserID") ;
$stmt->execute();
	
					while($row = $stmt->fetch(PDO::FETCH_ASSOC))
					{
					echo('<option value ='.$row['loanid'].'>'.$row['loanid'].', '.$row['UserID'].','.$row['ISBN'].', '.$row['Date_due'].'</option>');
					}
				?>
			</select>

				<input type="submit" value="test">

			</form>
	</center>		
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/chosen.jquery.js"></script>
<script type = "text/javascript">
	$('.chosen-select').chosen({width: "20%"});
</script>
</html>


$stmt = $conn->prepare("SELECT tblreserve.ReserveID as reserveid, tblbooks.title as t, tblreserve.ISBN as ISBN, tblreserve.UserID as userid, tblusers.Forename as f, tblusers.Surname as s FROM Tblreserve 
INNER JOIN tblbooks 
ON tblbooks.ISBN=tblreserve.ISBN
INNER JOIN tblusers 
ON tblusers.userID=tblreserve.UserID") ;
$stmt->execute();
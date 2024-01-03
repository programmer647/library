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
				$stmt = $conn->prepare("SELECT tblloans.LoanID as loanid, tblbooks.Title as t, tblbooks.Author_firstname as auf, tblbooks.Author_surname as aus, tblusers.Forename as f, tblusers.Surname as s FROM Tblloans 
INNER JOIN tblbooks 
ON tblbooks.ISBN=tblloans.ISBN
INNER JOIN tblusers 
ON tblusers.UserID=tblloans.UserID") ;
$stmt->execute();
	
					while($row = $stmt->fetch(PDO::FETCH_ASSOC))
					{
					echo('<option value ='.$row['loanid'].'>'.$row['t'].', '.$row['f'].', '.$row['s'].', '.$row['auf'].' '.$row['aus'].'</option>');
					}
				?>
			</select>

				<input type="submit" value="Return">

			</form>
	</center>		
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/chosen.jquery.js"></script>
<script type = "text/javascript">
	$('.chosen-select').chosen({width: "20%"});
</script>
</html>



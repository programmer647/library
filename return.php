<!DOCTYPE html>
<?php
	$connect = new mysqli("localhost", "root", "", "test")  or die(mysqli_error());
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
		<form action="test.php" method="post">
			<select name="book" class = "chosen-select" > 
				<?php
				include_once("connection.php");
				$stmt = $conn->prepare("SELECT * FROM name");
				$stmt->execute();
	
					while($row = $stmt->fetch(PDO::FETCH_ASSOC))
					{
					echo('<option value ='.$row['id'].'>'.$row['id'].', '.$row['name'].'</option>');
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
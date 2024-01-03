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
		<h1>Chosen.js</h1>
		<form action="returnprocess.php" method="post">
			<select name="book" class = "chosen-select" > 
				<?php
				include_once("connection.php");
				$stmt = $conn->prepare("SELECT * from tblbooks ") ;
        $stmt->execute();
	
					while($row = $stmt->fetch(PDO::FETCH_ASSOC))
					{
					echo('<option value ='.$row['ISBN'].'>'.$row['Title'].'</option>');
					}
				?>
			</select>

      <select name="user" class="chosen-select">
      <?php
				include_once("connection.php");
				$stmt = $conn->prepare("SELECT * from tblusers ") ;
        $stmt->execute();
	
					while($row = $stmt->fetch(PDO::FETCH_ASSOC))
					{
					echo('<option value ='.$row['UserID'].'>'.$row['Username'].'</option>');
					}
				?>
        </select>

				<input type="submit" value="Return">

			</form>	
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/chosen.jquery.js"></script>
<script type = "text/javascript">
	$('.chosen-select').chosen({width: "20%"});
</script>
</html>



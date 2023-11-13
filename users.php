


<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>



<?php
session_start(); 
if (!isset($_SESSION['name']))
{   
    header("Location:login.php");
}
?>

      
<form action="addusers.php" method="post">
  First name:<input type="text" name="forename"><br>
  Last name:<input type="text" name="surname"><br>
  Username:<input type="text" name="username"><br>
  Password:<input type="password" name="passwd"><br>
  House:<input type="text" name="house"><br>
  Year:<input type="text" name="year"><br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="role" value="Pupil" checked> Pupil<br>
  <input type="radio" name="role" value="Teacher"> Teacher<br>
  <input type="radio" name="role" value="Admin"> Admin<br>
  <input type="submit" value="Add User">
</form>




</body>
</html>
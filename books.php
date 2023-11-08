<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
       
<form action="addbooks.php" method="post">
  ISBN number:<input type="number" name="ISBN"><br>
  Title:<input type="text" name="surname"><br>
  Author first name:<input type="text" name="username"><br>
  Author surname:<input type="password" name="passwd"><br>
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
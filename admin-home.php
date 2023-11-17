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
<head>
<title>Admin home page</title>

</head>

<body>

    <h1>Admin home page</h1>

</body>



</html>
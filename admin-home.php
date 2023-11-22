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
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">OSLibrary</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="home-page.html">Home</a></li>
            <li><a href="books.php">Add books</a></li>
            <li><a href="users.php">Add users</a></li>
            <li><a href="#">View overdue books</a></li>
            <li><a href="viewusers.php">View users</a></li>
            <li><a href="#">Loan books to students</a></li>
            <li><a href="#">Collect reserved books</a></li>

            <li><a href="#">Page 3</a></li>
          </ul>
        </div>
      </nav>

</body>



</html>
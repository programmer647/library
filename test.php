<?php
session_start(); 
print_r($_SESSION);
if (!isset($_SESSION['name']))
{   
    header("Location:login.php");
}
?>

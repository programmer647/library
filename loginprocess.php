<?php
session_start();
print_r($_POST);
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers;" );
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    $hashed = $row['Password'];
    $attempt= $_POST['Pword'];
    if(password_verify($attempt, $hashed)){
        //header('Location: users.php');
        $_SESSION['name']=$row['Username'];
        $_SESSION['role']=$row['Role'];
        $_Session['id']=$row['UserID'];
        echo("Logged in");
        header('Location:home-page.html');
    }else{
        echo("Incorrect password");
        //header('Location: login.php');
    }
}
$conn=null;
?>

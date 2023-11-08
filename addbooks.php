<?php
include_once("connection.php");
array_map("htmlspecialchars",$_POST);

$stmt = $conn->prepare("INSERT INTO Tblbooks 
(ISBN,Title,Author_firstname,Author_surname)VALUES 
(:isbn,:title,:author_firstname,:author_surname)");

$stmt->bindParam(':isbn', $_POST["isbn"]);
$stmt->bindParam(':title', $_POST["title"]);
$stmt->bindParam(':author_firstname', $_POST["author_firstname"]);
$stmt->bindParam(':author_surname', $_POST["author_surname"]);
$stmt->execute();
$conn=null;

?>
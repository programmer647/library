<?php
include_once("connection.php");
array_map("htmlspecialchars",$_POST);

$first=$_POST['author_firstname'];
$second=$_POST['author_surname'];

echo($first);
echo($second);


$stmt=$conn->prepare("INSERT INTO tblauthors (`Author_firstname`, `Author_surname`) SELECT '$first', '$second' FROM DUAL WHERE NOT EXISTS (SELECT * FROM tblauthors WHERE `Author_firstname`='$first' AND `Author_surname`='$second' LIMIT 1)");
$stmt->execute();


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
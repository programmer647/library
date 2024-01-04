<?php
include_once("connection.php");
array_map("htmlspecialchars",$_POST);

$first=$_POST['author_firstname'];
$second=$_POST['author_surname'];

echo($first);
echo($second);


$stmt1=$conn->prepare("INSERT INTO tblauthors (`Author_firstname`, `Author_surname`) SELECT '$first', '$second' FROM DUAL WHERE NOT EXISTS (SELECT * FROM tblauthors WHERE `Author_firstname`='$first' AND `Author_surname`='$second' LIMIT 1)");
$stmt1->execute();


$query = $conn->query("SELECT * FROM tblauthors WHERE Author_firstname='$first' and Author_surname='$second'");




//$stmt2=$conn->prepare("SELECT * FROM tblauthors WHERE 'Author_firstname'='$first' AND 'Author_surname'='$second'");



while ($row = $query ->fetch(PDO::FETCH_ASSOC))
{
    $id=$row['AuthorID'];
    echo($id);

}
 $stmt3 = $conn->prepare("INSERT INTO Tblbooks 
(ISBN,Title,AuthorID)VALUES 
(:isbn,:title,:authorid)");

$stmt3->bindParam(':isbn', $_POST["isbn"]);
$stmt3->bindParam(':title', $_POST["title"]);
$stmt3->bindParam(':authorid', $id);
$stmt3->execute();
$conn=null; 

?>
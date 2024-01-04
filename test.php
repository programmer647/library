<?php

include_once("connection.php");

$stmt=$conn->prepare("IF[NOT] EXISTS(SELECT 1 FROM Tblauthors WHERE Author_surname='Collins)
BEGIN
  INSERT INTO tblauthors (Author_firstname, Author_surname) VALUES ('Suzanne','Collins')
END");
$stmt->execute();

?>
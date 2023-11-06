<?php
include_once("connection.php")

$stmt1=$conn->prepare("DROP TABLE IF EXISTS Tblusers;
CREATE TABLE Tblusers
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR (200) NOT NULL,
Year INT(2) NOT NULL,
House VARCHAR(20) NOT NULL,
Role TINYINT(1))");
$stmt1->execute();
$stmt1->closeCursor();

$stmt2 = $conn->prepare("DROP TABLE IF EXISTS TblUser;
CREATE TABLE TblUser 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL,
Year INT(2) NOT NULL,
Balance DECIMAL(15,2) NOT NULL,
Role TINYINT(1))");
$stmt2->execute();
$stmt2->closeCursor(); 


?>
<?php
include_once("connection.php")

$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblusers;
CREATE TABLE Tblusers
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR (200) NOT NULL,
Year INT(2) NOT NULL,
House VARCHAR(20) NOT NULL,
Role TINYINT(1))");
$stmt->execute();
$stmt->closeCursor();

$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblbooks;
CREATE TABLE Tblusers
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(20) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR (200) NOT NULL,
Year INT(2) NOT NULL,
House VARCHAR(20) NOT NULL,
Role TINYINT(1))");
$stmt->execute();
$stmt->closeCursor();


?>
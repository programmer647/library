<?php
include_once("connection.php");

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
$hashed_password = password_hash("password", PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO Tblusers(UserID,Username,Surname,Forename,Password,Year,House,Role)VALUES
(NULL,'Jsmith','Smith','John',:hp,10,'Laxton',0),
(NULL,'Rcunniffe','Cunniffe','Robert',:hp,0,'St A',1),
(NULL,'Hbass','Hector','Bass',:hp,10,'St A',0)
");
$stmt->bindParam(':hp', $hashed_password);
$stmt->execute();
$stmt->closeCursor();
 


$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblbooks;
CREATE TABLE Tblbooks
(ISBN INT(14) NOT NULL,
Title VARCHAR(20) NOT NULL,
Author_firstname VARCHAR(20) NOT NULL,
Author_surname VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
// add number of copies on loan and number of copies in the library


$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblloans;
CREATE TABLE Tblloans
(UserID INT(4) NOT NULL,
IBSN INT(14) NOT NULL,
Date_loaned DATE NOT NULL,
Date_due DATE NOT NULL)");
$stmt->execute();
$stmt->closeCursor();



?>
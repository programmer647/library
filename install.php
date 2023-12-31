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
(NULL,'Hbass','Bass','Hector',:hp,12,'St A',0),
(NULL, 'Sbourne','Bourne','Sophie',:hp,12,'Sadler',2)
");
$stmt->bindParam(':hp', $hashed_password);
$stmt->execute();
$stmt->closeCursor();
 


$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblbooks;
CREATE TABLE Tblbooks
(ISBN INT(14) NOT NULL,
Title VARCHAR(20) NOT NULL,
AuthorID INT(4) NOT NULL)
");
$stmt->execute();
$stmt->closeCursor();
/* $stmt = $conn->prepare("INSERT INTO Tblbooks(ISBN,Title,Author_firstname,Author_surname)VALUES
(345243,'test','test','test'),
(457289,'Divergent','Veronica ','Roth'),
(654839,'The Hunger Games','Suzanne','Collins')
");
$stmt->execute();
$stmt->closeCursor(); */


// add number of copies on loan and number of copies in the library


$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblloans;
CREATE TABLE Tblloans
(LoanID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserID INT(4) NOT NULL,
ISBN INT(14) NOT NULL,
Date_loaned DATE NOT NULL,
Date_due DATE NOT NULL,
Overdue BOOLEAN NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblreserve;
CREATE TABLE Tblreserve
(ReserveID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserID INT(4) NOT NULL,
ISBN INT(14) NOT NULL,
Reserve_until DATE NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblauthors;
CREATE TABLE Tblauthors
(AuthorID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Author_firstname VARCHAR(20) NOT NULL,
Author_surname VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();





?>
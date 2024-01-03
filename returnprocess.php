<?php
include_once("connection.php");

echo("yes");
print_r($_POST);

$id=($_POST['book']);

$stmt=$conn->prepare("DELETE FROM tblloans WHERE LoanID=$id");
$stmt->execute();



?>
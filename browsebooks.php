<?php

include_once('connection.php');
echo("</br>");

$stmt=$conn ->prepare("SELECT * FROM tblbooks");
$stmt ->execute();

while ($row = $stmt ->fetch(PDO::FETCH_ASSOC))
{
    echo($row["Title"].' '.$row["Author_firstname"].' '.$row["Author_surname"]."</br>");
}

?>
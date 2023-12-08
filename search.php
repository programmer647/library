<?php

define("DB_HOST","localhost");
define("DB_NAME","library");
define("DB_CHARSET","utf8mb4");
define("DB_USER","root");
define("DB_PASSWORD","");



$stmt=$pdo->prepare("SELECt * from tblbooks where 'title' LIKE ? ");
$stmt ->execut(["%".$POST["search"]."%","%".$_POST["search"]."%"]);
$results=$stmt->fetchAll();
if (isset($_POST["ajax"])){echo json_encode($results);}

?>

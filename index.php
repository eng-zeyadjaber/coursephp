<?php
include "9 - PDO Connect Database MYSQL.php";
$stmt=$connect->prepare("SELECT * FROM team") ; 
$stmt -> execute() ; 
$teams = $stmt -> fetchAll(PDO::FETCH_ASSOC);
print_r($teams);
?>
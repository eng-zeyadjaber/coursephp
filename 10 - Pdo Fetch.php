<?php

include "9 - PDO Connect Database MYSQL.php";

// $stmt = $connect->prepare("SELECT * FROM team ORDER BY id DESC");
// $stmt = $connect->prepare("SELECT legend FROM team ORDER BY id DESC");
$stmt = $connect->prepare("SELECT * FROM team where legend = 'gomis'");

$stmt->execute();
// $player =$stmt->fetchAll(); كل النتايج
// $player =$stmt->fetchColumn(PDO::FETCH_ASSOC);
// $player =$stmt->fetchColumn(); // كولومن واحدة فقط
$player = $stmt->fetch();
$count = $stmt->rowCount();
// print_r($player);
// echo $player;
echo $count ;


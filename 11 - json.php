<?php
include "9 - PDO Connect Database MYSQL.php";

// $stmt = $connect->prepare("SELECT * FROM team WHERE legend = 'messi'");
// $stmt->execute();
// $player =$stmt->fetch(PDO::FETCH_ASSOC); // كل النتايج
// $count = $stmt->rowCount();
// echo json_encode($player);
echo json_encode(array("Team" =>"Alhilal Best Team In The World"));

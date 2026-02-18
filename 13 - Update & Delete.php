<?php

include "9 - PDO Connect Database MYSQL.php";

// $stmt = $connect->prepare("UPDATE `team` SET `name` = 'Inter' WHERE id = 5");
// $stmt = $connect->prepare("UPDATE `team` SET `name` = ? , `legend` = ? WHERE id = ?");
$stmt = $connect->prepare("DELETE FROM `team` WHERE id = ?");
$stmt->execute(array(6));

$count = $stmt->rowCount();

if ($count > 0){
    echo "success" ;
} else {
    echo "failed" ;
}
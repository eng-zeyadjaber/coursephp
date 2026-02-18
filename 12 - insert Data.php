<?php
include "9 - PDO Connect Database MYSQL.php";

// $stmt = $connect -> prepare("INSERT INTO `team`(`name`, `legend`) VALUES ('milan','maldine')");
// $stmt = $connect -> prepare("INSERT INTO `team`(`name`, `legend`) VALUES (?,?)");
$stmt = $connect -> prepare("INSERT INTO `team`(`name`, `legend`) VALUES (:us,:em)");

$stmt->execute(array(
    ":us" => "inter" ,
    ":em" => "adriano"
    ));

$count = $stmt->rowCount();

if ($count > 0){
    echo "success" ;
} else {
    echo "failed" ;
}
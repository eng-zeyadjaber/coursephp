<?php

include "../9 - PDO Connect Database MYSQL.php";

$noteid     = filterRequest("id");

$stmt = $connect->prepare("DELETE FROM notes WHERE notes_id = ?");

$stmt->execute(array($noteid));

$count = $stmt->rowCount();

if ($count > 0){
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}
<?php
$dsn = "mysql:host=localhost;dbname=noteapp";
$team = "root";
$pass = "";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" // for arabic
);
try{
    $connect = new PDO($dsn , $team , $pass , $option);
    $connect -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    include "15 - functions.php";
}catch(PDOException $e){
    echo $e -> getMessage();
}

?>
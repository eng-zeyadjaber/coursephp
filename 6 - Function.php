<?php
$name = "Abo Alzeed / ";
function Name(/*$name*/){
    // echo "What Is Your Name : " . $name;
    echo $GLOBALS ["name"];
    $GLOBALS["age"] = 25 ; 
    global $name ;
    echo $name;
}
// Name("Abo Alzeed");
Name();
echo $age
?>
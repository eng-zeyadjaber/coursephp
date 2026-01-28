<?php
// List
$listname = array("Abo Alzeed" , "Ahmed" , "abod" , 1 , 2 , array("zeyad" , array("name" => "ziyad" , "age" => 25)));
// $listname [1] = "saleh";
// echo $listname [1] ;
// for ($i = 0 ; $i <count($listname); $i++){
//     echo $listname [$i] ;
//     echo "<br/>" ;
// }
echo $listname[5][1]["name"];
print_r($listname[5][1]);

////////////////////////////////////////////////////////////

//Map
// $student = array(
//     "name" => "Abo Alzeed",
//     "age" => 25
// );

// echo $student["name"];
// foreach($student as $key => $value){
//     echo $key;
//     echo " : $value";
//     echo "<br/>";
// }
?>
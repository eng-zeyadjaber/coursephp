<?php
$text = "Abo Alzeed Zeyad" ;
$strtoarray = explode(" " , $text);
echo "<pre>" ;
print_r($strtoarray);
echo "</pre>" ;

$text2 = "image.jpg" ;
$strtiarray2 = explode("." , $text2) ;
"<pre>" ;
echo end($strtiarray2);
"</pre>" ;

"<pre>" ;
$text3 = "image.jpg" ;
$strtiarray3 = explode("." , $text3) ;
$ext = end($strtiarray3);
$allowExt = array ("jpg" , "png" , "gif");
if (in_array($ext , $allowExt)){

    echo "yes" ;

}else {
    echo "no" ;
}
"</pre>" ;

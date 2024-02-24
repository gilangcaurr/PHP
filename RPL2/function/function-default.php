<?php 

function concat($str, $deff, $delimeter =" " )
{
    return $str . $delimeter .$deff;
} 

$massage = concat("Hallo","David disini!", " "); 

echo $massage; 
?>
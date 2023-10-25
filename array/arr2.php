<?php
//2. Add a new color to the array from question 1.


$colors=array("Black","Red","Blue","Green");


$pos=4;
$new=array("Purple");
array_splice($colors,$pos,0,$new);

print_r($colors);
/*
OUTPUT:
Array ( [0] => Black [1] => Red [2] => Blue [3] => Green [4] => Purple )
*/

?>
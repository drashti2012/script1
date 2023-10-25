<?php

//7. Remove the last number from the array created in question 5.

$numbers=array(5,7,10,11,12);

$remove=array_pop($numbers);

echo "Removed Array is :";
print_r($remove);

echo "<br>";
print_r($numbers);


/*
OUTPUT:

Removed Array is :12
Array ( [0] => 5 [1] => 7 [2] => 10 [3] => 11 )
*/

?>
<?php

//11. Create two arrays, one with fruits and another with vegetables. Merge them into a single array.

$fruits=array("Apple","Pineapple","Mango","Grapes");
$vegetable=array("Potato","Tomato","Chilli","Ginger");

$mergedarray=array_merge($fruits,$vegetable);
print_r($mergedarray);

/*
OUTPUT:
Array ( [0] => Apple [1] => Pineapple [2] => Mango [3] => Grapes [4] => Potato [5] => Tomato [6] => Chilli [7] => Ginger )
*/


?>
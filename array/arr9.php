<?php

//9. Sort an array of words in alphabetical order.

$fruits=array("Apple","Pineapple","Mango","Grapes");
sort($fruits);

foreach($fruits as $fruit)
{
    print_r($fruit);
    echo "<br>";
}

/*
OUTPUT:
Apple
Grapes
Mango
Pineapple
*/

?>
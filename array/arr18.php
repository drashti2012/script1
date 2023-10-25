<?php

//18. Remove a city of your choice from the array and display the updated list.

$cities=array("Dubai","United Kingdom","Paris","Maldives");


unset($cities[2]);

print_r($cities);

/*
OUTPUT:
Array ( [0] => Dubai [1] => United Kingdom [3] => Maldives )
*/

?>
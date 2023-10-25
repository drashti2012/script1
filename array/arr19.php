<?php

//19. Sort the cities in alphabetical order.

$cities=array("Dubai","United Kingdom","Paris","Maldives");

sort($cities);

foreach($cities as $city)
{
    print_r($city);
    echo "<br>";
}

/*
OUTPUT:

Dubai
Maldives
Paris
United Kingdom
*/

?>
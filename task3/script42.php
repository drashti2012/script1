<?php

$array1 = array(2, 4, 6, 8, 10, 12);
$array2 = array(1, 2, 3, 4, 5, 6);

$result=array_diff($array1,$array2);

print_r($result);

/*output:
Array ( [3] => 8 [4] => 10 [5] => 12 )
*/


?>
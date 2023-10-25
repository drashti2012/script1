<?php
$array = array(1, 2, 3, 4, 5);

$first_element = array_shift($array);

echo "Removed element: " . $first_element . PHP_EOL;
print_r($array);


$array = array(1, 2, 3, 4, 5);

$new_length = array_unshift($array, 0);

echo "</br>New length of array: " . $new_length . PHP_EOL;
print_r($array);

/*
output:
Removed element: 1 Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )
New length of array: 6 Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )*/

?>
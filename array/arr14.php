<?php 

//14. Remove the email element from the associative array and display the updated array.

$person=array("name"=>"Dhara","age"=>20,"email"=>"dharavariya12@gmail.com");

$remove=array_pop($person);

echo "Removed Arry is :";
print_r($remove);

echo "<br>";
print_r($person);

/*
OUTPUT:
Removed Arry is :dharavariya12@gmail.com
Array ( [name] => Dhara [age] => 20 )

*/


?>
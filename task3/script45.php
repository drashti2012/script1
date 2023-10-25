<?php

$a=array("1"=>"red","2"=>"blue","3"=>"black");


$flipped = array_flip($a);

print_r($flipped);

/*output:
Array ( [red] => 1 [blue] => 2 [black] => 3 )*/

?>
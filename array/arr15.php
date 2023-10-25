<?php 

//15. Create a multidimensional array to store information about movies, including title, director, and
//release year for at least two movies. Display the information for one of the movies.

$movies=array("title"=>array("Shershaah","Pushpa"),"director"=>array("Vishnuvardhan","Sukumar"),"relese year"=>array(2021,2021));
foreach($movies as $movie)
{
    print_r($movie);
    echo "<br>";
}

/*
OUTPUT:
Array ( [0] => Shershaah [1] => Pushpa )
Array ( [0] => Vishnuvardhan [1] => Sukumar )
Array ( [0] => 2021 [1] => 2021 )
*/

?>

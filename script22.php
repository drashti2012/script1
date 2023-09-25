<?php
// PHP program to find area
// of circle
       
function findArea( $r)
{
    $PI =3.142;
    return $PI * pow($r, 2);
}
   
// Driver Code
echo("Area is ");
echo(findArea(5));
return 0;
  
// This code is contributed by vt_m.
?>
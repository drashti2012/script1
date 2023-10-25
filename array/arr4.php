<?php

//4. Check if the color "Green" exists in the array from question 1.

$colors=array("Black","Red","Blue","Green");

if(in_array("Green",$colors))
{
    echo "Green is exists in array";
}
else
{
    echo "Green is not exists in array";
}

/*
OUTPUT:
Green is exists in array
*/
?>
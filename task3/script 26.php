<?php
function generateRandomNumber($min, $max) {
   return rand($min, $max);
}
$minimum = 1;
$maximum = 100;
$randomNumber = generateRandomNumber($minimum, $maximum);
echo "Random number between $minimum and $maximum: $randomNumber";
?>
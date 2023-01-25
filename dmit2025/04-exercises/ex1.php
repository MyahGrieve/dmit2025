<?php

 /* 
    Write a program to swap 2 numbers.

    Note: This doesn't just take in 2 numbers and display them in reverse order. It needs to take the value inside $number1 and get it into $number2 and vice versa without erasing one.
 */

$num1 = 25;
$num2 = 7;

echo "<p>Number 1 is: $num1 and Number 2 is: $num2.</p>";

$num3 = $num1;
$num1 = $num2;
$num2 = $num3;

echo "<p>Number 1 is: $num1 and Number 2 is: $num2.</p>";

?>
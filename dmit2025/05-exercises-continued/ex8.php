<!-- 
    Prompt the user for a four-digit number (e.g. 5297) and display the sum of all of the digits (e.g. 23). The four-digit number must be read as a single number and the individual digits must be broken out using divide (/) and modulus (%). (1000, 100, 10) 

    EXPECTED OUTPUT

    5297 => 5 + 2 + 9 + 7 == 23
-->

<?php

$num = 5297;
$sum = 0;

// Thousandth Place

$temp = intdiv($num, 1000);
$sum += $temp;

$temp = $num % 1000;

// Hundredth Place

$sum += intdiv($temp, 100);
$temp = $num % 100;

// Tenth Place

$sum += intdiv($temp, 10);
$temp = $num % 10;

// Ones

$sum += $temp;

echo $sum;


/* WHILE LOOP METHOD */

$num = 5297;
$total = 0;

while($num % 10 > 0) {
    $temp = $num % 10;
    $total += $temp;
    $num /= 10;

    echo "<p>Num: $num Temp: $temp Total: $total </p>";
}

echo $total;

/* 
    But PHP is a weak-typed language. Do we have to do the math? 

    We could get away with treating our user input as a string. And since PHP treats a string like an array of characters, we can actually just grab each character and add them as numbers.

    Note that if you try to concatenate each character, they'll still be treated as characters, not numbers.
*/

$str = '5297';

$final = $str[0] + $str[1] + $str[2] + $str[3];

echo "<p>The sum of each number is " . $final . ".</p>";

?>
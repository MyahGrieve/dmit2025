<?php
    /*
        Data Types in PHP

        Characters  Single letters, numbers, or symbols (i.e. glyphs).
        Strings     A collection of characters.
        Integers    Whole number values. Can use math with them.
        Floats      Decimal number values.
        Booleans    A value that can only be True or False.
        Arrays      A collection of data that acts as key-value pairs.
    */

    // Basic Arithmetic

    $num1 = 3;
    $num2 = 6;

    $num3 = $num1 * $num2;
    echo "<p>$num1 multiplied by $num2 equals $num3</p>";

    $num3 = $num1 / $num2;
    echo "<p>$num1 divided by $num2 equals $num3</p>";

    // Exponentiation
    $exponent = 4 ** 2; 
    echo "<p>4 raised to the power of 2 is $exponent</p>";

    // Modulus

    $a = 5;
    $result = $a % 2;

    echo "$a divided by 2 has a remainder of $result";

    // Control Structures

    if($result == 0) {
        echo "<p>$a is even.</p>";
    } else {
        echo "<p>$a is odd.</p>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 6</title>
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!-- 
            Write a program that prompts the user for the lengths of the two shorter sides of a right triangle. It then calculates and displays the length of the longer side (i.e. hypotenuse).
         -->

         <?php
            // We need to use a method for square roots [sqrt()], but we can either use a method [pow()] or an arithmetic operator [**] to do exponents.

            // Remember that when PHP evaluates an arithmetic expression, the order of operations applied (i.e. PEMDAS)
         
            $hypotenuse = sqrt(5 ** 2 + 8 ** 2);
            echo $hypotenuse;
         ?>
    </body>
</html>
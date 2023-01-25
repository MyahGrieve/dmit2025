<?php 
    echo "PHP blocks can go above the head (and be rendered out at run time!)."
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello, World!</title>

        <style>
            body {
                font-family: sans-serif;
            }

            .red {
                color: red;
            }
        </style>
    </head>
    <body>
        <?php 
            $name = 'Valerie';

            echo '<h1>Hello, world!</h1>';
            // Double Quotes
            echo "<p>It's good to see you, $name!</p>";
            // Single Quotes with Concatenation
            echo '<p>Hey, ' . $name . '!</p>';

            /*
                Escape Characters

                \n  new line
                \\  backslash
                \$  dollar sign
                \t  tab (4 spaces)
            */

            echo "<p class=\"red\">This line is red.</p>"
        ?>
    </body>
</html>
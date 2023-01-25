<?php

$size = 11;

for ($i = 0; $i < $size; $i++) {
    echo '<p>';

    for ($w = 0; $w < $size; $w++) {
        if ($i == $w) {
            echo 'X';
        } else {
            echo '*';
        }
    }

    echo '</p>';
}

?>

<hr> 

<!-- We can write if/else statements a slightly different way, although it's a little less legible. -->

<?php 
    $size = 11;

    for ($i = 0; $i < $size; $i++) {
        echo '<p>';
    
        for ($w = 0; $w < $size; $w++) {
            echo ($i == $w) ? 'X' : '*';
        } 
    
        echo '</p>';
    }
?>
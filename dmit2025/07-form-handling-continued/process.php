<?php

    foreach($_POST as $name => $value) {
    echo "<p><strong>" . ucfirst($name) . "</strong> is $value.</p>";
    }

?>
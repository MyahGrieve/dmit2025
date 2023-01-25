<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>My PHP Test Document</title>

  </head>
  <body>
    <form action="forms-primer.php" method="post">
        Your name: <input type="text" name="username"><br>
        Your fave color: <input type="text" name="color"><br>
        Your fave animal: <input type="text" name="animal"><br>
        <input type="submit" name="mysubmit" value="barney">
    </form>
  <?php
  echo "<pre>";// just to preserve whitespace to help visualize this
    print_r($_POST);// returns the values in an array
    echo "</pre>";
    
    ?>

  </body>
</html>



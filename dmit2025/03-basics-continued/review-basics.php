<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHP Basics</title>
    <style>
        body{
            font-family:verdana;
        }
        .red{
            color:red;
        }
    </style>
  </head>
  <body>
<h1>PHP Basics</h1>
  <?php
  echo "<p>Here is a line of <span class=\"red\">text </span>echo'd in PHP</p>";
  // PHP variables:
/*
PHP variables must start with a $
Case sensitive
Cannot start with a number but may contain numbers
No spaces
*/
//setting the variable values
  $num1 = 3;
  $num2 = 6;
?>
<h3>Grabbing the variable values</h3>
<?php
$num3 = $num1 * $num2;
// we can use PHP vars inside a text string in PHP if we use double quotes
echo "\n<p>The value of $num1 multiplied times $num2 is $num3</p>";

$num4 = $num1 + $num2; 
echo "\n<p>The value of $num1 added to $num2 is $num4</p>";

// on your own, do / and - 

// here, we use the concatenation operator (.) to join things
$num5 = $num1 / $num2; 
echo "\n<p>The value of " . $num1 . " divided by ". $num2. " is $num5</p>";



?>

<h3>More Operators - Logical or Comparison Operators, and Conditionals</h3>

<?php
/*
== 	is the same as (or equal to)
=== 	is the same as (or equal to), AND the same data type
!= 	NOT the same as (this is used a lot)
<> 	NOT the same as
<=	 less than or equal to
>=	greater than or equal to
>	greater than
<	less than
&& 	Means this AND this
|| 	Means this OR this.


if(){

}else{
    
}

*/

if(5 == 7){
    echo "<p>This is a TRUE statement</p>";
}else{
    echo "<p>This is a FALSE statement</p>";
}
if(5 == 5){
    echo "<p>This is a TRUE statement</p>";
}else{
    echo "<p>This is a FALSE statement</p>";
}

if(5 != 3){
    echo "<p>This is a TRUE statement</p>";
}else{
    echo "<p>This is a FALSE statement</p>";
}
echo "\n<hr>";

if((5 != 3) && (6 == 6)){ // both side must be true
    echo "<p>This is a TRUE statement</p>";
}else{
    echo "<p>This is a FALSE statement</p>";
}

if((5 != 3) || (6 == 9)){// either side could be true
    echo "<p>This is a TRUE statement</p>";
}else{
    echo "<p>This is a FALSE statement</p>";
}


?>
<h4>The Switch Statement</h4>
<?php
$i = 4;
switch ($i){
    case 1:
        echo "The number is one";
        break;
    case 2:
        echo "The number is two";
        break;
    case 3:
        echo "The number is three";
        break;
    default:// like the else
        echo "We don't know this number";
        break;
}

?>
<h3>PHP Loops</h3>
<?php
$input = 1;
while($input <= 50){
    echo "<p>Times through this loop: $input</p>";
    $input++;// increment this var
}




?>
<h3>just for fun...a conditional that changes your design</h3>
<?php
$color = "blue";
if($color == "red"){
    echo "<style>body{background-color:red;}</style>";
}else{
    echo "<style>body{background-color:blue;}</style>";
}


?>

  </body>
</html>



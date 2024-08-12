<?php
    $firstname= "zohreh";
    $lastname= "okhravi";
    $fulname= $firstname.$lastname;
    $age= 20;
    $height= 1.55;
    $weight= 52;


    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo "<h1 style= 'color: blue;'>$fulname</h1>";
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $height;
    echo "<br>";
    echo $weight;
    echo "<br>";

//string.integer.float

$a= 8;
$z= 2;

$e= $a + $z;
echo "<h3>$a + $z =$e";

$e= $a - $z;
echo "<h3>$a - $z =$e";

$e= $a * $z;
echo "<h3>$a * $z =$e";

$e= $a / $z;
echo "<h3>$a / $z =$e";

$e= $a % $z;
echo "<h3>$a % $z =$e";
echo "<br>";

$i= 2;
$i += 6;
echo $i;

echo "<br>";
$i= $i + 1;
$i++;
echo $i;


?>
<?php

$numbers= array(2,17.5,9.75,15,19);


if($numbers[0] >=10){
    echo "$numbers[0] passed";
    echo "<br/>";
}
else{
    echo "numbers[0] failed";
    echo "<br/>";
}

if($numbers[1] >=10){
    echo "$numbers[1] passed";
    echo "<br/>";
}
else{
    echo "numbers[1] failed";
    echo "<br/>";
}

if($numbers[2] >=10){
    echo "$numbers[2] passed";
    echo "<br/>";
}
else{
    echo "numbers[2] failed";
    echo "<br/>";
}

if($numbers[3] >=10){
    echo "$numbers[3] passed";
    echo "<br/>";
}
else{
    echo "numbers[3] failed";
    echo "<br/>";
}

if($numbers[4] >=10){
    echo "$numbers[4] passed";
    echo "<br/>";
}
else{
    echo "numbers[4] failed";
    echo "<br/>";
}

echo "<h1>while loop</h1>";

$i=0;
$scores= array(2,10,16,14,0,25,17.5,9.75,15,19);
while($i<sizeof($scores)){
    if($scores [$i] >= 10){
        echo "$scores[$i] passed";
        echo "<br/>";
    }
    else{
        echo "$scores[$i] failed";
        echo "<br/>";
    }
    $i++;
}


echo "<h1>for loop</h1>";
for($i=0;$i<sizeof($scores);$i++){
    if($scores[$i] >=10){
        echo "$scores[$i] passed";
        echo "<br/>";
    }
    else{
        echo "$scores[$i] failed";
        echo "<br/>";
    }
}


echo "<h1>functio</h1>";
function f($x, $y){
    if($x<10){
        return $x * $x + $y;
    }
    else if($x >= 20){
        return $x * $x;
    }
    else{
        return false;
    }
}
$x= f(2, 5);
echo f(11, 4);
echo "<br/>";
echo $x;
?>
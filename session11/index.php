<?php
    $a= 7;
    $z= 3;

    $e= $a < $z;
    echo "<h4>$a < $z= $e</h4>";

    $e= $a <= $z;
    echo "<h4>$a <= $z =$e</h4>";

    $e= $a > $z;
    echo "<h4>$a > $z= $e</h4>";

    $e= $a >= $z;
    echo "<h4>$a >= $z= $e</h4>";

    $e= $a == $z;
    echo "<h4>$a = $z = $e</h4>";

    $e= $a != $z;
    echo "<h4>$a != $z= $e</h4>";

    //comparison operators

    $a= true;
    $z= true;
    $e= $a && $z;
    echo "<h4>$a and $z= $e</h4>";


    $a= false;
    $z= true;
    $e= $a && $z;
    echo "<h4>$a and $z= $e</h4>";


    $a= false;
    $z= false;
    $e= $a && $z;
    echo "<h4>$a and $z= $e</h4>";



    $a= true;
    $z= true;
    $e= $a || $z;
    echo "<h4>$a or $z= $e</h4>";


    $a= false;
    $z= true;
    $e= $a || $z;
    echo "<h4>$a or $z= $e</h4>";


    $a= false;
    $z= false;
    $e= $a || $z;
    echo "<h4>$a or $z= $e</h4>";

    //logical operators

    $name1 = "pooria";
    $name2 = "atena";
    $name3 = "amir ali";
    $name4 = "kiamehr";
    $name5 = "nima";
    $name6 = "arash";
    $name7 = "zohreh";
    $name8 = "mahdi";

    $name1 =["pooria","atena","amir ali","kiamehr","nima","arash","zohreh","mahdi"];
    $name2 = array("pooria","atena","amir ali","kiamehr","nima","arash","zohreh","mahdi");
    echo "<p>$name1[6]</p>";
    print_r ($name1);
    echo "<br />";
    print_r ($name2);
    echo "<br />";
    

    $information = [["zohreh","okhravi",20,52,1.55,false],
                    ["Morteza", "Ghoddosui", 30, 92, 1.86, true],
                    ["Pooria", "Nadimi", 20, 85, 1.76, true],
                    ["Atena", "Asadi", 19, 75, 1.70, false],
                    ["AmirAli", "MasoumShahi", 20, 53, 1.71, true],
                    ["Kiamehr", "Keramati", 13, 51, 1.60, true],
                    ["Nima", "Javanshir", 17, 86, 1.70, true],
                    ["Arash", "HasanPour", 15, 77, 1.66, true],
                    ["Mahdi", "Khayatan", 17, 56, 1.70, true]];

    echo "<br />";
    echo $information[1][0];
    echo "<br />";
    echo $information[2][3];
    echo "<br />";
    echo $information[3][4];
    echo "<br />";
    echo $information[4][0];
    echo "<br />";
    echo $information[5][3];
    echo "<br />";
    echo $information[6][1];
    echo "<br />";
    echo $information[7][2];
    echo "<br />";
    echo $information[8][5];
    echo "<br />";

    print_r($information);
    echo "<br />";

    $info = array("fname"=>"zohreh", "lname"=>"okhravi", "age"=>20, "weight"=>52, "height"=>1.55, "sex"=>false);
    print_r($info);
    echo "<br />";




?>

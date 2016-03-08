<?php
    $age = $_GET["$age"];

    if($age >=16){
        echo "Specs.";
    }
    else if ($age >=18){
        echo "Mugs and Specs";
    }
    else if ($age >=21){
        echo "Mugs, Rolls and Specs";
    }
    else{echo "Too young!";}
?>



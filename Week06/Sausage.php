<?php
    $age = $_GET["age"];

    if($age >= 16 && $age < 18){
        echo "You can buy specs.";
    }
    else if ($age >= 18 && $age < 21){
        echo "You can buy mugs and specs.";
    }
    else if ($age >= 21){
        echo "You can buy mugs, rolls and specs.";
    }
    else{echo "Too young to buy anything!";}
?>



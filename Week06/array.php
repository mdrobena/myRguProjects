<?php
/**
 * Created by PhpStorm.
 * User: 1511989
 * Date: 08/03/2016
 * Time: 09:50
 */
$provisionedActivities = array("Specs", "Drugs", "Rock and Roll");

foreach($provisionedActivities as $x){
    print "<p>$x</p>";
}

$provisionedActivities[1] = "Hugs";
foreach($provisionedActivities as $x){
    print "<p>$x</p>";
}

unset($provisionedActivities[2]);
foreach($provisionedActivities as $x){
    print "<p>$x</p>";
}
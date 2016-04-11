<?php
/**
 * Created by PhpStorm.
 * User: 1511989
 * Date: 11/04/2016
 * Time: 09:39
 */
$access_level = $_COOKIE['access_level'];

displayAccessLevelInformation($access_level);

function displayAccessLevelInformation($access_level){
    if($access_level == "standarduser"){
        echo "<p>You are currently logged in as a standard user!</p>";
    }
    elseif($access_level == "rootuser"){
        echo "<p>You are currently logged in a root user.</p>";
        echo "<p>You now have access to additional administrative features.<?p>";
    }
}
?>
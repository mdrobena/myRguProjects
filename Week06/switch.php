<?php
/**
 * Created by PhpStorm.
 * User: 1511989
 * Date: 08/03/2016
 * Time: 09:34
 */
$wantedgoods = $_GET["item"];

switch($wantedgoods){
    case specs:
        echo "You have to be 16 to buy specs.";
        break;
    case mugs:
        echo "You have to be 18 to buy specs.";
        break;
    case rolls:
        echo "You have to be 21 to buy specs.";
        break;
    default:
        echo "Item is not recognized";
}
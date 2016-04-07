<?php
/**
 * Created by PhpStorm.
 * User: Zdeno
 * Date: 07/04/2016
 * Time: 14:15
 */
include ("dbconnect.php");

if ($db->connect_errno){
    die('Connectfailed['.$db->connect_error. ']');
}
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$spower = $_POST["spower"];
$sql_query = "INSERT INTO superheros (firstName, lastName, mainSuperpower)
              VALUES  ($fname, $lname, $spower )";

$result = $db->query($sql_query);
$result->close();
$db->close();
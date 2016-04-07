<?php
/**
 * Created by PhpStorm.
 * User: Zdeno
 * Date: 07/04/2016
 * Time: 14:15
 */
include ("dbconnect.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$spower = $_POST["spower"];


$sql_query = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$fname', '$lname', '$spower')";

if(mysqli_query($db, $sql_query)){

}
else{
    echo "Error ".$sql_query."<br>".mysqli_error($db);
}

header("location:index.php");
?>
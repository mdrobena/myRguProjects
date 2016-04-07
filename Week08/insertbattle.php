<?php
/**
 * Created by PhpStorm.
 * User: Zdeno
 * Date: 07/04/2016
 * Time: 18:02
 */
include ("dbconnect.php");

$superheroID = $_POST['superhero'];
$villan = $_POST['villan'];

$sql_query = "INSERT INTO battles (superheroID, villanFought) VALUES ('$superheroID', '$villan')";

if($db->query($sql_query)){

}
else{
    echo "Error: ".$sql_query."<br>".mysqli_error($db);
}
header("location:index.php");
?>
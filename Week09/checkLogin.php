<?php
/**
 * Created by PhpStorm.
 * User: 1511989
 * Date: 11/04/2016
 * Time: 09:30
 */
$name = $_POST["name"];
$password = $_POST["password"];

if($name == "Mike" && $password == "mysecretpassword"){
    setcookie('access_level', 'standarduser');
}

header("Location:homepage.php");
?>
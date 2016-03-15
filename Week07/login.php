<?php
session_start();
/**
 * Created by PhpStorm.
 * User: 1511989
 * Date: 14/03/2016
 * Time: 10:13
 */
include("dbconnect.php");

if(empty($_POST["username"]) || empty($_POST["password"])){
    echo "Both field are required.";
}
else{
    $username = $_POST['username'];
    $_SESSION["username"] = $username;
    $password = $_POST['password'];


    $sql = "SELECT uid FROM users WHERE username = '$username' and password = '$password'";

    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) == 1){
        header("location: home.php");
    }
    else{
        echo "Incorrect username or password.";
    }

}


?>
<?php
/**
 * Created by PhpStorm.
 * User: Zdeno
 * Date: 07/04/2016
 * Time: 14:15
 */
include ("dbconnect.php");

$sql_query = "SELECT * FROM superheros";
$result = $db->query($sql_query);
while($row = $result->fetch_array()){
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $mainSuperpower = $row['mainSuperpower'];
    echo "<article>
            <h3>{$firstName} {$lastName}</h3>
            <p>This superhero main power is <strong>{$mainSuperpower}</strong></p>
          </article>";
}
?>
<!DOCTYPE html>
/**
* Created by PhpStorm.
* User: 1511989
* Date: 14/03/2016
* Time: 10:43
*/
<html>
<head>
    <meta charset="utf-8">
    <title>Movies after 2010</title>
    <!--<link rel="stylesheet" href="style.css" type="text/css"/-->
</head>
<body>
<h1>Movies in the marvelmovies db created after 2010:</h1>

<?php
include("dbconnect.php");
$sql = "SELECT title FROM marvelmovies WHERE yearReleased > '2010'";
$result = mysqli_query($db, $sql);

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["marvelMovieID"] . " " . $row["title"] . "<br>";
    }
}
else{
    echo "0 results";
}

?>

</body>
</html>
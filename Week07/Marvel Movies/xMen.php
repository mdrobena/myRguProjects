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
    <title>X-Men Movies</title>
    <!--<link rel="stylesheet" href="style.css" type="text/css"/-->
</head>
<body>
<h1>All X-Men movies in the marvelmovies db:</h1>

<?php
include("dbconnect.php");
$sql = "SELECT title FROM marvelmovies WHERE title LIKE '%X-Men%'";
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
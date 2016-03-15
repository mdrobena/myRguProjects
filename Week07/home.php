<?php
session_start()
?>
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
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Hello</h1>
<p>The currently logged in user: <?php echo $_SESSION["username"]; ?></p>

<?php
include("dbconnect.php");
$sql = "SELECT uid FROM users";
$result = mysqli_query($db, $sql);

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["uid"] . "<br>";
    }
}
else{
    echo "0 results";
}

?>

</body>
</html>


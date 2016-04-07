<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Battle</title>
</head>
<body>
    <h2>Battles fought by superheros!</h2>
    <form action="insertbattle.php" method="post">
        <label>Please select a superhero:</label><br>
        <select>
            <?php
            include ("dbconnect.php");
            $sql_query = "SELECT * FROM superheros";
            $result = mysqli_query($db, $sql_query);
            while($row = $result->fetch_array()){
                $firstname = $row['firstName'];
                $lastname = $row['lastName'];
                echo "<option>{$firstname} {$lastname}</option>";
            }
            ?>
        </select><br>
        <label>Enter the name of the villan:</label><br>
        <input type="text" name="villan"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


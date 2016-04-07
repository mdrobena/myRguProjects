<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Superhero System</h1>
    <h2>Superhero Home Page</h2>
</header>
<p>What would you like to do></p>
<ul>
    <li><a href="insertsuperhero.php">Insert a superhero</a></li>
    <li><a href="showsuperheros.php">Show all superheros</a></li>
    <li><a href="battle.php">Insert a battle</a></li>
    <li><a href="showbattles.php">Show all battles</a></li>
    <ul>
        <?php
        include ("dbconnect.php");
        $sql_query = "SELECT * FROM superheros";
        $result = mysqli_query($db, $sql_query);
        while($row = $result->fetch_array()){
            $firstname = $row['firstName'];
            $lastname = $row['lastName'];
            $id = $row['superheroID'];
            echo "<li><a href='displayBattles.php?id={$id}'>Battles for {$firstname} {$lastname}</a></li> ";
        }
        ?>
    </ul>
</ul>
</body>
</html>

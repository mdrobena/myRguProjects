<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Battles Fought</title>
</head>
<body>
<header>
    <h3>Display of all fought battles!</h3>
    <a href="index.php">Index</a>
</header>
<main>
    <?php
    include ("dbconnect.php");

    if(isset($_GET['id'])){
        $superheroID = $_GET['id'];
        $sql = "SELECT * FROM superheroBattles WHERE superheroID == '$superheroID'";
    }
    else{
        $sql = "SELECT * FROM superheroBattles";
        }
    $result = $db->query($sql);
    while($row = $result->fetch_array()){
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $mainsuperPower = $row['mainSuperpower'];
        $villanFought = $row['villanFought'];
        echo "<article>
                <p>The superhero known as {$firstName} {$lastName} recently fought {$villanFought} using {$mainsuperPower} superpower</p>
        </article>";
    }
    ?>
</main>
</body>
</html>

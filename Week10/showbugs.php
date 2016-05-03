<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bugs</title>
    <link rel="stylesheet" href="Resources/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="Resources/bugs.css">
    <meta name="viewport"
          content="width=device-width,
                    initial-scale=1,
                    minimum-scale=1,
                    maximum-scale=1"
    />
</head>
<!--Header starts-->
<header>
    <img src="Resources/logo.png" alt="logo picture" id="logo">
    <h1>Show Bugs</h1>
    <h3>Keeping track of all the pesky little bugs</h3>
</header>
<!--Header finishes-->
<body>
<!--Main starts-->
<main class="grid-container">
    <aside class="grid-20">
        <nav>
            <ul>
                <li><a href="bugs.html">All Bug Items</a></li>
                <li><a href="bugs.html">Android Bugs</a></li>
                <li><a href="bugs.html">iOS Bugs</a></li>
                <li><a href="bugs.html">Windows Bugs</a></li>
                <li><a href="index.php">Insert Bug</a></li>
            </ul>
        </nav>
    </aside>

    <section class="grid-80">
        <?php
        include("dbconnect.php");
        $sql = "";
        if($_GET["bugCategory"] === "Android" or "iOS" or "Windows"){
            $category = $_GET["bugCategory"];
            global $sql;
            $sql = "SELECT * FROM bugs WHERE BugCategory =".$category;
        }

        elseif($_GET["bugCategory"] === "All"){
            global $sql;
            $sql = "SELECT * FROM bugs";
        }

        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                    $bugName = $row["bugName"];
                    $bugCategory = $row["BugCategory"];
                    $bugSummary = $row["BugSummary"];
                    echo "<article>
                <h2>{$bugName}</h2>
                <h3>{$bugCategory}</h3>
                <p>{$bugSummary}</p><br>
                </article>";
            }
        }

        else{
            echo "0 results";
        }
    ?>
    </section>
</main>
<!--Main finishes-->

<!--Footer starts-->
<footer>
    <p>Designed by [Michal, [2016]]</p>
</footer>
<!--Footer finishes-->
</body>
</html>
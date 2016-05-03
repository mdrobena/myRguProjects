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
    <h1>BugTracker</h1>
    <h3>Keeping track of all the pesky little bugs</h3>
</header>
<!--Header finishes-->
<body>
<!--Main starts-->
<main class="grid-container">
    <aside class="grid-20">
        <nav>
            <ul>
                <li><a href="showbugs.html">All Bug Items</a></li>
                <li><a href="showbugs.html">Android Bugs</a></li>
                <li><a href="showbugs.html">iOS Bugs</a></li>
                <li><a href="showbugs.html">Windows Bugs</a></li>
                <li><a href="addbugs.html">Insert Bug</a></li>
            </ul>
        </nav>
    </aside>

    <article class="grid-80">
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
    ?>
            <form action = "<? echo $_SERVER['PHP_SELF']?>" method="post">

                <table>
                    <tr>
                        <td><label>Bug Name</label></td>
                        <td><input type="text" name="bugName" value="" size="30" required></td>
                    </tr>

                    <tr>
                        <td><label>Bug Summary</label></td>
                        <td><textarea name="summary" cols="30" rows="5" required></textarea></td>
                    </tr>

                    <tr>
                        <td><label>Bug Category</label></td>
                        <td><input type="text" name="bugCategory" value="" size="30" required></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>

            </form>
            <?
        }

        elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
            include("dbconnect.php");
            $bugName = $_POST['bugName'];
            $BugCategory = $_POST['bugCategory'];
            $BugSummary = $_POST['summary'];
            $sql = "INSERT INTO bugs (bugName, BugCategory, BugSummary) VALUES ('$bugName', '$BugCategory','$BugSummary')";

            if (mysqli_query($db, $sql)){
            }

            else{
                echo "Error: " . $sql_query . "<br>" . mysqli_error($db);
            }
            header("location:showbugs.php");
        }

        else{
            header("location:index.php");
        }
            ?>
    </article>
</main>
<!--Main finishes-->

<!--Footer starts-->
<footer>
    <p>Designed by [Michal, [2016]]</p>
</footer>
<!--Footer finishes-->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bugs Welcome Page</title>
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
                <li><a href="showbugs.php?bugCategory = All">All Bug Items</a></li>
                <li><a href="showbugs.php?bugCategory = Android">Android Bugs</a></li>
                <li><a href="showbugs.php?bugCategory = iOS">iOS Bugs</a></li>
                <li><a href="showbugs.php?bugCategory = Windows">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a></li>
            </ul>
        </nav>
    </aside>

    <article class="grid-80">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis euismod nisl, ut feugiat metus ornare et. Nunc justo nisl, volutpat nec sollicitudin non, laoreet eget risus. Fusce libero ligula, commodo in libero quis, porta scelerisque diam. Etiam eu suscipit neque. Duis nec lacus et tellus tempor euismod. Nulla posuere nisi dolor, quis molestie massa bibendum tincidunt. Donec rutrum, justo vulputate posuere luctus, orci augue ullamcorper magna, id dapibus leo elit nec felis. Aliquam pulvinar luctus orci. Morbi vel viverra est, vitae sagittis erat. Mauris quis arcu ac justo suscipit dictum ac quis mi. Praesent accumsan cursus tristique. Nunc vulputate aliquet erat, ac molestie est porta vel.</p>
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
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Print post</title>
</head>
<body>
    <main>
        <article>
            <h1><?php $_POST['title'] ?></h1>
            <br><br>
            <strong>Category: <?php $_POST['animal']?></strong>
            <br><br>
            <p><?php $_POST['box']?></p>
        </article>
    </main>
</body>
</html>


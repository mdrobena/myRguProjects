<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Print post</title>
</head>
<body>
    <main>
        <article>
            <h1><?php echo $_POST['title'] ?></h1>
            <br><br>
            <strong>Category: <?php echo $_POST['animal']?></strong>
            <br><br>
            <p><?php echo $_POST['box']?></p>
        </article>
    </main>
</body>
</html>


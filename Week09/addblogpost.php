<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SEND post</title>
</head>
<body>
<form action="addblogpost.php" method="post">
    <label>Title</label>
    <br>
    <input type="text" name="title">
    <br>
    <label>Content</label>
    <br>
    <textarea name="box" rows="10" cols="30"></textarea>
    <br>
    <label>Category</label>
    <br>
    <select name="animal">
        <option value="cat">Cat</option>
        <option value="dog">Dog</option>
        <option value="misc">Misc</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] === GET){

    }
    elseif($_SERVER['REQUEST_METHOD'] === POST) {
        $title = $_POST['title'];
        $category = $_POST['animal'];
        $blog =$_POST['box'];
        print ("<h1>{title}</h1>");
        echo '<br>';
        print ("<strong>Category: {$category}</strong>");
        echo '<br>';
        print ("<p>{blog}</p>");
    }
?>
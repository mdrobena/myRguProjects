<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello!</title>
</head>
<body>
    <a href="http://nothingworks1.azurewebsites.net/Week08/get.php?w=world&p=printers&s=scanners">Click me!</>
    <?php
    $w = $_GET["w"];
    $p = $_GET["p"];
    $s = $_GET["s"];
    echo "Hello ".$w."!<br>";
    echo "Hello ".$p."!<br>";
    echo "Hello ".$s."!<br>";
    ?>

</body>
</html>

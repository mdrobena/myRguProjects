<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Specs, Mugs & Sausage Rolls</title>
</head>
<body>
<form>
    Age: <br>
    <input type="number" name="$age">
    <input type="submit" value="Submit">

</form>

<?php
if($age > 16 && $age < 18){
    echo "Specs.";
}
else if ($age > 18 && $age < 21){
    echo "Mugs.";
}
else if ($age > 21){
    echo "Mugs.";
}
else(echo "Too young!";)
            ?>


</body>
</html>
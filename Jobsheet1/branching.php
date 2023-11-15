<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobsheet 1 Branching</title>
</head>
<body>
<form action="branching.php" method="get">
<input type="number" name="x" placeholder="Masukan bilangan">
<input type="submit" value="Cek">
</form>
<?php

$x = @$_GET['x'];
    echo "Nilai x = $x <br><br>";
    if($x > 0) {
        echo "$x adalah Bilangan Positif";
    }
    else if($x < 0) {
        echo "$x adalah Bilangan Negatif";
    } 
    else {
        echo "$x adalah Bilangan Nol";
    }
    ?>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobsheet 1 Looping</title>
</head>
<body>
    <?php
    echo "Perulangan For untuk menampilkan bilangan Genap dari 1 hingga 10 <br>";
    for ($x=2; $x<=10; $x+=2) {
        echo $x;
        echo "<br>";
    }
    echo "Perulangan While untuk menampilkan bilangan Ganjil dari 1 hingga 10 <br>";
    $y=1;
    while ($y <=10 ) {
        echo $y;
        $y += 2;
        echo "<br>";
    }
    echo "Perulangan do...While untuk menampilkan bilangan Prima kurang dari 20 <br>";
    $a=2;
    $b=0;
    do {
        $c=0;
        for ($b=2; $b < $a; $b++){
            if ($a % $b==0){
                $c++;
            }
        }
        if ($c==0){
            echo "$a <br>";
        }
        $a++;
    } while ($a < 20);
    ?>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobsheet 1 Fungsi</title>
</head>
<body>

    <?php
    function persegi($sisi)
    {
        return $sisi*$sisi;
    }
    function lingkaran($jarijari)
    {
        return 3.14*$jarijari*$jarijari;
    }
    ?>
     <form method="POST">
        Masukkan sisi = <input type="number" name="sisi">
        <input type="submit" value="hitung">
    </form>
    <?php
    $sisi = @$_POST['sisi'];
    $persegi = @$_POST['persegi'];
    echo "Luas Persegi = ".persegi($sisi)."<br><br>";
    ?>
    <form method="POST">
         Masukkan Jari-jari = <input type="number" name="jarijari" >
        <input type="submit" value="hitung">
    </form>
    <?php
    $jarijari = @$_POST['jarijari'];
    $lingkaran = @$_POST['lingkaran'];
    echo "Luas Lingkaran = ".lingkaran($jarijari)."<br>";
    ?>
</body> 
</html>
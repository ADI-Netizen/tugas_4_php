<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $beli = 8000;
    $jual = 7500;
    $untung = 300;
    ?>
    <p>Harga Beli = <?= $beli ?></p>
    <p>Harga Jual = <?= $jual ?></p>
    <p>Keuntungan = <?= $untung ?></p>
    <p>Berapa jumlah kambing yang dibeli?</p>
    <p>Jawaban : <?php
                    $ekor = ($beli - $jual) / $untung;
                    echo ceil($ekor) . " ekor";
                    ?></p>
</body>

</html>
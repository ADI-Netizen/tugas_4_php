<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $saluran = 523;
    $volume = 8891;
    ?>
    <p>Jumlah saluran = <?= $saluran ?></p>
    <p>Jumlah terpakai = <?= $volume ?></p>
    <p>Rata - rata pemakaian = ... ?</p>
    <p>
        Jawaban : <?php
                    $avg = $volume / $saluran;
                    echo $avg . " liter/keluarga";
                    ?>
    </p>
</body>

</html>
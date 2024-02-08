<?php
$datadiri = [
    [
        "nama" => "mursidi",
        "alamat" => "b11",
        "tagihan" => "20.000",
        "gambar" => "mursidi.jpg"
    ],
    [
        "nama" => "salehi",
        "alamat" => "b12",
        "tagihan" => "20.000",
        "gambar" => "salehi.jpg"
    ],
    [
        "nama" => "salma",
        "alamat" => "b13",
        "tagihan" => "20.000",
        "gambar" => "salmai.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Pelanggan</h1>

    <ul>
        <?php foreach ($datadiri as $wrg) : ?>
        <a href="latihan2.php?gambar=<?= $wrg["gambar"]?>&nama=<?= $wrg["nama"];?> &alamat=<?= $wrg["alamat"];?>&tagihan=<?= $wrg["tagihan"];?>">
        <li><?= $wrg ["nama"];?></li></a>
        <?php endforeach ; ?>
    </ul>


</body>
</html>
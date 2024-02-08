<!-- <?php
$mahasiswa = [ 
    [
        "nama" => "saleh",
        "alamat" => "b12",
        "tagihan" => "20.000",
        "gambar" => "salehi.jpg"
    ],
    [
        "nama" => "mursid",
        "alamat" => "b13",
        "tagihan" => "20.000",
        "gambar" => "mursidi.jpg"
    ],
    [
        "nama" => "salma",
        "alamat" => "b14",
        "tagihan" => "20.000",
        "gambar" => "salmai.jpg"
    ]
];
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Penduduk</h1>

<?php foreach ($mahasiswa as $wrg) : ?>

    <ul>
        <li>
            <img src="img/<?= $wrg["gambar"];?>">
        </li>
        <li><?= $wrg["nama"]?></li>
        <li><?= $wrg["alamat"]?></li>
        <li><?= $wrg["tagihan"]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
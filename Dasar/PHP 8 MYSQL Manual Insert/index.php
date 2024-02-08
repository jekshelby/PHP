<?php
require 'funct.php';

$datainti = koneksi("SELECT * FROM pelanggan");
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
<h1>data pelanggan</h1>

<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Act</th>
            <th>Gambar</th>
            <th>alamat</th>
            <th>nama</th>
            <th>tagihan</th>
        </tr>

    <?php foreach ($datainti as $p) : ?>
        <tr>
                <td>
                    <?= $p["id"] ?>
                </td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td>
                    <img src="img/<?= $p["gambar"] ?>">
                </td>
                <td>
                    <?= $p["alamat"]; ?>
                </td>
                <td>
                    <?= $p["nama"]; ?> 
                </td>
                <td>
                    <?= $p["tagihan"]; ?>
                </td>
            </tr>
        <?php endforeach ; ?>
    </table>
</body>
</html>
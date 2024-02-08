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
<a href="tambah.php">Tmbah data pelanggan</a>
<br>

<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Act</th>
            <th>Gambar</th>
            <th>alamat</th>
            <th>nama</th>
            <th>tagihan</th>
        </tr>

        <?php $no = 1;?>
    <?php foreach ($datainti as $p) : ?>
        <tr>
                <td>
                    <?= $no ?>
                </td>
                <td>
                    <a href="ubah.php?id=<?= $p["id"];?>">edit</a> |
                    <a href="hapus.php?id=<?= $p["id"];?>" onclick="return confirm('apakah anda yakin menghapus data ini')">hapus</a>
                </td>
                <td>
                    <img src="img/<?= $p["gambar"] ?>" height="50">
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
            <?php $no++; ?>
        <?php endforeach ; ?>
    </table>
</body>
</html>
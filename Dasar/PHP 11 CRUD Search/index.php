<?php
require 'funct.php';

$datainti = koneksi("SELECT * FROM pelanggan");

//tombol cari ditekan
if (isset($_POST["cari"])) {
    $datainti = cari($_POST["keyword"]);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Pelanggan</h1>
<a href="tambah.php">Tambah Data Pelanggan</a>
<br>

<form action="" method="post">
    <input type="text" name="keyword" id="" placeholder="Cari.." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    <a href="index.php"><button>Reset</button></a>
</form>
<br>

<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Act</th>
            <th>Gambar</th>
            <th>Alamat</th>
            <th>Nama</th>
            <th>Tagihan</th>
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
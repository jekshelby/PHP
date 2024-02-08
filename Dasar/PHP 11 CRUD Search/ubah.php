<?php
require 'funct.php';

//ambil data dari linking
$pe = $_GET["id"];
// var_dump($pe);

$warga = koneksi("SELECT * FROM pelanggan WHERE id = $pe")[0]; //link data menggunakan variabel $pe [0] => agar tidk mengulang penulisan arry
// var_dump($warga["nama"]);


if (isset($_POST["submit"])){
    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
    else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
    }
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
    <h1>ubah data mahasiswa</h1>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $warga["id"] ?>">
    <ul>
        <li>
            <label for="username">Username</label>
            <input type="text" name="nama" id="username" value="<?= $warga["nama"];?>">
        </li>
        <li>
            <label for="address">Address</label>
            <input type="text" name="alamat" id="address" value="<?= $warga["alamat"];?>">
        </li>
        <li>
            <label for="payment">Payment</label>
            <input type="text" name="tagihan" id="payment" value="<?= $warga["tagihan"];?>">
        </li>
        <li>
            <label for="picture">Picture</label>
            <input type="text" name="gambar" id="picture" value="<?= $warga["gambar"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah</button>
        </li>
    </ul>
</form>
<a href="index.php">kembali ke menu utama</a>
</body>
</html>
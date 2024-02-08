<?php
require 'funct.php';

if (isset($_POST["submit"])){
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
        </script>
        ";
    }
    else {
        echo "
        <script>
            alert('data gagal ditambah');
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
    
<form action="" method="post">
    <ul>
        <li>
            <label for="username">Username</label>
            <input type="text" name="nama" id="username">
        </li>
        <li>
            <label for="address">Address</label>
            <input type="text" name="alamat" id="address">
        </li>
        <li>
            <label for="payment">Payment</label>
            <input type="text" name="tagihan" id="payment">
        </li>
        <li>
            <label for="picture">Picture</label>
            <input type="text" name="gambar" id="picture">
        </li>
        <li>
            <button type="submit" name="submit">Tambah</button>
        </li>
    </ul>
</form>
<a href="index.php">kembali ke menu utama</a>
</body>
</html>
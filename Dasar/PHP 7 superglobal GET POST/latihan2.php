<!-- isset -->
<?php
    if (!isset($_GET["nama"]) || 
    !isset($_GET["alamat"]) ||
    !isset($_GET["tagihan"]) ||
    !isset($_GET["gambar"]) 
    ) 
    {
    header("Location: latihan.php");
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
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"];?>" alt="">
        </li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["alamat"]?></li>
        <li><?= $_GET["tagihan"];?></li>
    </ul>
</body>
</html>
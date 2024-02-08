<!-- php biasa -->
<!-- <?php
// $mahasiswa = [
//     ["Muhammad Dzaky Ahnaf", "2022573010021", "dzahnaf09@gmail.com", "Teknik Informatika"],
//     ["Aura Syaskia", "2022573010005", "aurasyaskia@gmail.com", "Teknik Informatika"]
// ];
?> -->

<!-- array assocciative 
keynya dibuat sendiri
-->
<?php
$mahasiswa = [
    [
        "nama" => "Muhammad Dzaky Ahnaf",
        "nim" => "2022573010021",
        "email" => "dzahnaf09@gmail.com",
        "jurusan" => "Teknk Informatika",
        "gambar" => "dzaky.jpg"
    ],
    [
        "nama" => "Aura Syaskia",
        "nim" => "2022573010005",
        "email" => "aurasyaskia@gmail.com",
       "jurusan" => "Teknk Informatika",
       "gambar" => "aura.jpg"
    ]
];

// echo $mahasiswa[1]["nama"];
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
    <h1>daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <!-- cara memangggil gambar array -->
            <img src="img/<?php echo $mhs["gambar"];?>">
        </li>
        <li><?= $mhs["nama"]?></li>
        <li><?= $mhs["nim"]?></li>
        <li><?= $mhs["email"]?></li>
        <li><?= $mhs["jurusan"]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
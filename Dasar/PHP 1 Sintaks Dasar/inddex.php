<?php
    //ini adalah komentar
    /*komentar double space*/

    // sintaks PHP
    // standart output
    // echo, print
    // print_r (mencetak isi array)
    // var_dump (melihat isi variabel)

echo "Dzaky";
print("Dzaky");
print_r("Dzaky");
var_dump("Dzaky");

    // penulisan sintaks php
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP

    // variabel dan tipe data
    // variabel ditandai dengan tanda $
$nama = "Dzaky";

    // operator aritmatika
    // +, -, /, *, %
$x = 10;
$y = 20;
echo $x + $y;

// penggabung string // concatenation // concat
// operatornya yaitu tanda titik .

$nama_depan = "Dzaky";
$nama_belakang = "Ahnaf";

echo $nama_depan . " " . $nama_belakang;

// operator assignment
// operator penugasan
// =, +=, -=, *=, /=, %=, .=

$x = 1;
echo $x;

// operator perbandingan 
// <, >, <=, >=, ==, !=
var_dump(1 == "1");

// operator identitas
// ===, !==
var_dump(1 === "1");

// operator logika
// &&, ||,  !
$au = 10;
var_dump($au < 20 && $au % 2 == 0);


?>

<!-- no 1 -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang<?php echo " $nama";?></h1>
</body>
</html>

<!-- no 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Selamat Datang</h1>";
        ?>
</body>
</html>
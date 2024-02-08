<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: green;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
        <?php
        $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        ?>

        <?php foreach ($angka as $x) : ?>

    <div class="kotak"><?= $x?>1</div>

    <?php endforeach; ?>
</body>
</html> -->

<?php
$angka = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]];

foreach ($angka as $x){
    foreach ($x as $y){
    echo $y;
    echo " ";
    }
}
    
    
?>
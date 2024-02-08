<?php
$db = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data dari tabel pelanggan/query
$result = mysqli_query($db, "SELECT * FROM pelanggan");
// if (!$result) {
//     echo mysqli_error($db);
// }


// cara ambil data result
// mysqli_fetch_row() //arry numeric
// mysqli_fetch_assoc() // arr asc
// mysqli_fetch_array() //perpaduan
// 

// while( $au = mysqli_fetch_assoc($result) ){
//     var_dump($au["nama"]);
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>

<body>
    <h1>Daftar Pelanggan</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Act</th>
            <th>Gambar</th>
            <th>alamat</th>
            <th>nama</th>
            <th>tagihan</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td>
                    <?= $row["id"] ?>
                </td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td>
                    <img src="img/<?= $row["gambar"] ?>">
                </td>
                <td>
                    <?= $row["alamat"]; ?>
                </td>
                <td>
                    <?= $row["nama"]; ?> 
                </td>
                <td>
                    <?= $row["tagihan"]; ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

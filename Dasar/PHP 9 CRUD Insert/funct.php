<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function koneksi($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function tambah($data) {
    global $conn;
    $nama =htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tagihan = htmlspecialchars($data["tagihan"]);
    $gambar = htmlspecialchars($data["gambar"]);

$query = "INSERT INTO pelanggan
VALUES
('', '$nama', '$alamat', '$tagihan', '$gambar')
";
mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($hapus){
    global $conn;

    mysqli_query($conn, "DELETE FROM pelanggan WHERE id = $hapus");
    return mysqli_affected_rows($conn);
}
?>
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
?>
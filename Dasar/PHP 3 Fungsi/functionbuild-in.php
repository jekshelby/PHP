<!-- Belajar Function -->

<?php
// menampilkan tanggal
echo date("l, d-M-y");
?>
<br>

<?php
echo time();
?>
<br>

<?php
// menampilkan 100 hari dari hari yang sekarang
echo date("l", time()+60*60*24*100);
?>
<br>

<?php
// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l, d=M-Y", mktime(0, 0, 0, 6, 22, 2004));
?>
<br>

<?php
// mencari asal jam
echo date("l", strtotime("22 jun 2004"));
?>
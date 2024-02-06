<?php
require_once 'Lagu.php';
require_once 'Info.php';

$lagu1 = new Lagu("Lowlife", "Pop Punk", "Neck Deep");

$informasiLagu = new Info();
echo $informasiLagu->show($lagu1);
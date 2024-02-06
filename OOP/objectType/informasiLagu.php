<?php
class Info
{
    public function show($infoLagu) //tipe data objek
    {
        $display = "Judul Lagu = {$infoLagu->namaLagu} <br>Genre Musik = {$infoLagu->genre} <br>Artis = {$infoLagu->penyanyi}";
        return $display;
    }
}
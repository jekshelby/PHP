<?php
class Lagu
{
    // propety      
    public $namaLagu, $genre, $penyanyi;

    // Constructor
    public function __construct($namaLagu, $genre, $penyanyi)
    {
        $this->namaLagu = $namaLagu;
        $this->genre = $genre;
        $this->penyanyi = $penyanyi;
    }
}
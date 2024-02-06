<?php
class PropertyMethod {
    // propety
    public $namaLagu, $genre, $penyanyi;

    // Constructor
    public function __construct($namaLagu, $genre, $penyanyi) {
        $this->namaLagu = $namaLagu;
        $this->genre = $genre;
        $this->penyanyi = $penyanyi;
    }

    // Method
    public function show()
    {
        return "Judul: $this->namaLagu, Genre: $this->genre, Artis: $this->penyanyi";
    }
}

$lagu = new PropertyMethod("Lowlife", "Pop Punk", "Neck Deep");
echo $lagu->show();
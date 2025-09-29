<?php
// # Function
// Function berguna untuk memproses sesuatu menjadi hal lain, istilahnya dengan mesin
// Function wajib memberikan return nilai untuk menampilkan hasilnya.

// function tanpa parameter
function Pertambahan() {
    $x = 10;
    $y = 20;

    $hasil = $x + $y;
    return "$x di tambah $y adalah: $hasil";
}
echo Pertambahan();

echo "<br>";

?>
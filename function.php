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

// Function dengan parameter
function Pengurangan($angka1, $angka2) {
    $hasilPengurangan = $angka1 - $angka2;
    return "$angka1 di kurang $angka2 adalah: $hasilPengurangan";
}
echo Pengurangan(40, 5);

echo "<br>";

// Function dengan parameter, dengan nilai default
function Perkenalan( $nama, $salam = "Assalamualaikum" ) {
    echo "<br> $salam <br>";
    echo "Nama: $nama <br>";
    echo "Senang bisa berkenalan dengan Anda!";
}

// Panggil fungsi yang sudah di buat, dengan parameter custom
Perkenalan("Dafa Adi", "Hallo");


?>
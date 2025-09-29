<?php
// # Perulangan - For Each
// Jenis perulangan yang lebih efisien dan efektif
// Perulangan hanya untuk menampilkan data, tidak berupa angka

$kota = ["Jakarta", "Tangerang", "Bekasi"];
$makanan = ["Nasi Padang", "Nasi Goreng", "Mie Goreng"];

// Perulangan foreach tanpa urutan angka
foreach ( $kota as $detailKota ) {
    echo "Kota $detailKota <br>";
}

echo "<br>";

// Perulangan foreach dengan urutan angka
$nomor = 1;
foreach ( $makanan as $makananIndonesia ) {
    echo $nomor++.". Makanan Indonesia $makananIndonesia <br>";
}

?>
<?php
// # Array
// Array merupakan variable yang berfungsi untuk menyimpan banyaknya data dalam satu tempat variable

// 1. Menampilkan data array
echo "Saya pernah mengunjungi kota $kota[0], $kota[1], dan kota $kota[2]";
echo "<br>";

// Cek jenis variable data array
echo var_dump($kota);

// 2. Menambahkan isi array
// a) menambahkan isi pada index ke 3
$kota[3] = "Surabaya";

// b) menambahkan isi pada index terakhir
$kota[] = "Malang";

// 3. Menghapus isi array
// gunakan fungsi unser() untuk menghapus isi array

// Menghapus Semarang
unset($kota[1]);

// # Array Asosiatif

?>
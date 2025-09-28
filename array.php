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
// Array yang tidak menggunakan nomer atau angka. Indeks array asosiatif berbentuk kata kunci/key
$buku = [
    "Judul" => "Belajar Matematika Lanjutan",
    "Penulis" => "Erlangga",
    "Jumlah Halaman" => 400,
    "Harga" => 50000
];

echo "<br>";
echo "<h2>"."Nama Buku: ".$buku["Judul"]."</h2>";
echo "<p>"."Penulis: ".$buku["Penulis"]."</p>";
echo "<p>"."Jumlah Halaman: ".$buku["Jumlah Halaman"]."</p>";
echo "<p>"."Harga: Rp ".$buku["Harga"]."</p>";

?>
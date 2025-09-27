<?php
// Operator (Aritmatika & Komparasi)

// Operator Aritmatika
// +, -, *, /, %
$x = 10;
$y = 10;

echo "Operator Aritmatika";
echo "<br> Hasil Tambah $x + $y = ".$x + $y;
echo "<br> Hasil Kurang $x - $y = ".$x - $y;
echo "<br> Hasil Tambah $x * $y = ".$x * $y;
echo "<br> Hasil Tambah $x / $y = ".$x / $y;
echo "<br> Hasil Tambah $x % $y = ".$x % $y;

// Operator Komparasi
// ==, !=, >, <, >=, <=
echo "<br> <br> Operator Komparasi <br>";
echo var_dump($x > $y);
echo "<br>";
echo var_dump($x == $y);

// Operator Komparatif (If - Else)
// 3 Macam (if saja, if else, dan if else - if else)
echo "<br> <br>";
echo "Operator Komparatif (If - else) <br>";
if ( $x > $y ) {
    echo "nilai $x Lebih Besar dari nilai $y";
} else if ( $x < $y ) {
    echo "nilai $x lebih kecil dari nilai $y";
} else if ( $x >= $y ) {
    echo "nilai $x lebih besar sama dengan dari nilai $y";
} else if ( $x <= $y ) {
    echo "nilai $x lebih kecil sama dengan dari nilai $y";
} else if ( $x == $y ) {
    echo "nilai $x sama dengan nilai $y";
} else if ( $x != $y ) {
    echo "nilai $x tidak sama dengan nilai $y";
} else {
    echo "Tidak ada Nilai";
}
?>
<?php
// # Perulangan - For
// for ( deklarasi awal; kondisi; format pengulangan ) {
//     code 
// }

// For Increment
for ( $i = 1; $i <= 10; $i++ ) {
    echo "Perulangan For ke - $i <br>";
}

echo "<br>";

// For Decrement
for ( $j = 10; $j >= 1; $j-- ) {
    echo "Perulangan For ke - $j <br>";
} 

echo "<br>";

// # Perulangan - Array
$kota = ["Jakarta", "Semarang", "Wonogiri"];

echo "<h2>Kota - kota di Indonesia</h2>";
for ( $k = 0; $k < count($kota); $k++ ) {
    echo ($k + 1).". Kota $kota[$k] <br>";
}

?>
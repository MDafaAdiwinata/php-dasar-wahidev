<?php
// Switch Case
// Switch Case membutuhkan break untuk setiap case

$lampu = "merah";
switch ($lampu) {
    case "merah":
        echo "Lampu $lampu, bertanda untuk Berhenti";
        break;
    case "kuning":
        echo "Lampu $lampu, bertanda untuk Hati - hati";
        break;
    case "hijau":
        echo "Lampu $lampu, bertanda untuk Jalan";
        break;
    default:
        echo "Lampu Mati";
}
?>
<?php
$result = "";
if ( isset( $_POST['hitung'] ) ) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ( $operator ) {
        case '+':
            $result = $angka1 + $angka2;
            break;
        case '-':
            $result = $angka1 - $angka2;
            break;
        case '*':
            $result = $angka1 * $angka2;
            break;
        case '/':
            $result = $angka1 / $angka2;
            break;
        default:
            $result = "Operator tidak valid";
            break;
    }

}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator - PHP</title>
</head>
<body>
    <h1>Kalkulator Sederhana - PHP</h1>
    <br>
    <form action="" method="POST">
        <input type="number" name="angka1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2" required>
        <button name="hitung" type="submit" >Hitung</button>
        <br>
        <p><?= $result; ?></p>
    </form>
</body>
</html>
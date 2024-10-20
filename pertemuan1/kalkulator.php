<?php



$hasil =0;

if(isset($_POST)){

    $bilangan1 = $_POST['bilangan1']??0;
    $bilangan2 = $_POST['bilangan2']??0;
    $operasi = $_POST['operasi']??NULL;

    if($operasi == "+"){
        $hasil = $bilangan1 + $bilangan2;
    }

    if($operasi == "-"){
        $hasil = $bilangan1 - $bilangan2;
    }

    if($operasi == "*"){
        $hasil = $bilangan1 * $bilangan2;
    }

    if($operasi == "/"){
        $hasil = $bilangan1 / $bilangan2;
    }
}



?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h1>Aplikasi kalkulator sederhana</h1>


    <form action="" method="post">
        <label for="">Masukkan nilai pertama : </label>
        <input type="number" name="bilangan1">
        <br>

        <label for="">Masukkan nilai kedua :</label>
        <input type="number" name="bilangan2">
        <br>

        <label for="">Pilih operasi</label>
        <select name="operasi" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">X</option>
            <option value="/">/</option>
        </select>
        <br>

        <button type="submit">Hasil perhitungan : <?php echo $hasil ?></button>

    </form>
</body>
</html>
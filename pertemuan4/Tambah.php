<?php

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST["nama_barang"];
    $kategori = $_POST["kategori"]; 
    $harga_barang = $_POST["harga_barang"]; 
    $stok = $_POST["stok"]; 

    $sql = "INSERT INTO barang (nama_barang, kategori, harga, stok) 
            VALUES ('$nama_barang', '$kategori', '$harga_barang', '$stok')";
    
    if (mysqli_query($mysqli, $sql)) {
        header('location: index.php');  
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
   <form action="" method="post">
    <table border="1" cellspacing="0" cellpadding="7">
        <tr>
            <td><label for="nama_barang">Nama:</label></td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td><label for="kategori">Kategori:</label></td>
            <td><input type="text" name="kategori"></td>
        </tr>
        <tr>
            <td><label for="harga_barang">Harga:</label></td>
            <td><input type="text" name="harga_barang"></td>
        </tr>
        <tr>
            <td><label for="stok">Stok:</label></td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>

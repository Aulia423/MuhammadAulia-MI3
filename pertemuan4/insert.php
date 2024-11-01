<?php

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $nama_barang = $_GET["nama_barang"];
    $harga = $_GET["harga"];
    $sql = "INSERT INTO barang (nama_barang, harga) VALUES ('$nama_barang', '$harga')";
    $mysqli->query($sql);
    header('location: index.php');
}

?>
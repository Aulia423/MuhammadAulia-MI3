<?php
include 'koneksi.php';

$nama_barang = $_GET["nama_barang"];
$harga = $_GET["harga_barang"];

$sql = "INSERT INTO barabg1 (nama_barang, harga) VALUES ('$nama_barang', '$harga')";
$mysqli->query($sql);

header('Location: index.php');
exit();
?>

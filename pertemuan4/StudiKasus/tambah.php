<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah_terjual = $_POST['jumlah_terjual'];
    $total_penjualan = $harga * $jumlah_terjual;

    $stmt = $mysqli->prepare("INSERT INTO tabel_penjualan (tanggal_penjualan, nama_produk, harga, jumlah_terjual, total_penjualan) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdii", $tanggal_penjualan, $nama_produk, $harga, $jumlah_terjual, $total_penjualan);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
}
?>

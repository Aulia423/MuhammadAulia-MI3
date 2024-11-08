<?php
$servername = "localhost"; // Sesuaikan jika server berbeda
$username = "root"; // Username database
$password = ""; // Password database
$database = "mysql1"; // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

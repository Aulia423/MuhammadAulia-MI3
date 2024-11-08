<?php
session_start();
include 'koneksi.php'; // Menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // Password yang dimasukkan oleh pengguna

    // Ambil data pengguna dari database berdasarkan username
    $query = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password_from_database);
    $stmt->fetch();
    $stmt->close();

    // Periksa password
    if ($hashed_password_from_database && password_verify($password, $hashed_password_from_database)) {
        // Password cocok, inisialisasi session
        $_SESSION["username"] = $username;

        // Redirect ke halaman utama atau dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Password tidak cocok, tampilkan pesan kesalahan
        echo "Username atau password salah. Coba lagi.";
    }
}

$conn->close();
?>

<?php
include 'koneksi.php'; // Menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash password

    // Simpan data pengguna ke database
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        // Redirect ke halaman login setelah registrasi berhasil
        header("Location: login.php");
    } else {
        echo "Registrasi gagal: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

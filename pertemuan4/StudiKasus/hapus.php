<?php
include 'koneksi.php'; 


$id = $_GET['id']; 


echo "ID yang akan dihapus: " . $id;
$stmt = $mysqli->prepare("DELETE FROM tabel_penjualan WHERE id = ?");
if (!$stmt) {
    die("Query tidak berhasil: " . $mysqli->error); 
}

$stmt->bind_param("i", $id);
if ($stmt->execute()) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $stmt->error; 
}

$stmt->close();
header("Location: index.php");
exit(); t
?>

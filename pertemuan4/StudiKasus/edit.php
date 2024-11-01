<?php
include 'koneksi.php'; 


$id = $_GET['id']; 
$stmt = $mysqli->prepare("SELECT * FROM tabel_penjualan WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Data tidak ditemukan."); 
}

$data = $result->fetch_assoc(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah_terjual = $_POST['jumlah_terjual'];
    $total_penjualan = $harga * $jumlah_terjual;

    $stmt = $mysqli->prepare("UPDATE tabel_penjualan SET tanggal_penjualan = ?, nama_produk = ?, harga = ?, jumlah_terjual = ?, total_penjualan = ? WHERE id = ?");
    $stmt->bind_param("ssdiid", $tanggal_penjualan, $nama_produk, $harga, $jumlah_terjual, $total_penjualan, $id);
    
    if ($stmt->execute()) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Error: " . $stmt->error; 
    }

    $stmt->close();
    header("Location: index.php");
    exit();
}

?>

<h2>Edit Laporan Penjualan</h2>
<form action="edit.php?id=<?php echo $id; ?>" method="POST">
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td><label for="tanggal_penjualan">Tanggal Penjualan:</label></td>
            <td><input type="date" name="tanggal_penjualan" value="<?php echo $data['tanggal_penjualan']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="nama_produk">Nama Produk:</label></td>
            <td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="harga">Harga:</label></td>
            <td><input type="number" step="0.01" name="harga" value="<?php echo $data['harga']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="jumlah_terjual">Jumlah Terjual:</label></td>
            <td><input type="number" name="jumlah_terjual" value="<?php echo $data['jumlah_terjual']; ?>" required></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Perbarui Laporan</button></td>
        </tr>
    </table>
        
</form>

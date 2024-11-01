<?php
include 'koneksi.php';

// Query untuk menampilkan data
$result = $mysqli->query("SELECT * FROM tabel_penjualan");
?>

<html>
<body>
    <h2>Laporan Penjualan</h2>
    <form action="tambah.php" method="POST">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
            <td><label for="tanggal_penjualan">Tanggal Penjualan:</label></td>
            <td><input type="date" name="tanggal_penjualan" required></td>
        </tr>
        <tr>
            <td><label for="nama_produk">Nama Produk:</label></td>
            <td><input type="text" name="nama_produk" required></td>
        </tr>
        <tr>
            <td><label for="harga">Harga:</label></td>
            <td><input type="number" step="0.01" name="harga" required></td>
        </tr>
        <tr>
            <td><label for="jumlah_terjual">Jumlah Terjual:</label></td>
            <td><input type="number" name="jumlah_terjual" required></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Tambah Laporan</button></td>
        </tr>

        </table>
        
    </form>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Tanggal Penjualan</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah Terjual</th>
            <th>Total Penjualan</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['tanggal_penjualan'] ?></td>
            <td><?= $row['nama_produk'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['jumlah_terjual'] ?></td>
            <td><?= $row['harga'] * $row['jumlah_terjual'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

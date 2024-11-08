<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <table border="1">
        <caption>
            Data Barang
            <a href="tambah-data.php">Tambah Data</a>
        </caption>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = "SELECT * FROM barabg1 ORDER BY nama_barang ASC";
        $result = $mysqli->query($query);
        $no = 1;

        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_barang']; ?></td>
                <td><?= formatRupiah($row['harga']); ?></td>
                <td>
                    <a href="edit-data.php?id=<?= $row['id']; ?>">Edit</a>
                    <a href="hapus-data.php?id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>

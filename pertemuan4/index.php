<?php

include "koneksi.php";

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<style>
    a{
        text-decoration: none;
        font-weight: bold;
        font-size: 20px;
    }
</style>
<body>


<a href="tambah.php">Tambah Data</a>

<table border="1" cellspacing="0" cellpadding="7">
    <tr>
        <th>No</th>
        <th>Nama_barang</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <td>aksi</td>
    </tr>

    <?php

    while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
            <td><?= $row['id_barang'] ?></td>
            <td><?= $row['nama_barang'] ?></td>
            <td><?= $row['kategori'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['stok'] ?></td>
        </tr>

        <?php
    }
    ?>  
</table>
</body>
</html>
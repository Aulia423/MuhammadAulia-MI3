<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="insert.php" method="get">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" id="nama_barang" required><br />

        <label for="harga_barang">Harga Barang</label>
        <input type="number" name="harga_barang" id="harga_barang" required><br />

        <button type="submit">Simpan</button>
    </form>
</body>
</html>

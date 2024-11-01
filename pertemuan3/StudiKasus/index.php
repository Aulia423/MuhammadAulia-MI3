<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Data Penjualan</title>
</head>
<body>
    <h2>Sistem Pencatatan Data Penjualan</h2>
    <form action="proses_penjualan.php" method="POST">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td><label>Nama Produk:</label></td>
                <td><input type="text" name="nama_produk" required></td>
            </tr>
            <tr>
                <td><label>Harga Per Produk:</label></td>
                <td><input type="number" name="harga_produk" required></td>
            </tr>
            <tr>
                <td><label>Jumlah Terjual:</label></td>
                <td><input type="number" name="jumlah_terjual" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Tambahkan Penjualan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

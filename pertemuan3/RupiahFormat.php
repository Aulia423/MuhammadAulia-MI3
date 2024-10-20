<?php 

function FormatRupiah($rupiah){ 
    $hasil = "Rp. ".number_format($rupiah, 2, ',', '.');
    return $hasil;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan penjualan</title>
</head>
<body>
    <h3>Laporan penjualan:</h3>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Sepatu</td>
                <td><?php echo FormatRupiah(50000)?></td>
                <td>3</td>
                <td><?php echo FormatRupiah(150000)?></td>
            </tr>
            <tr>
                <th>2</th>
                <td>Baju</td>
                <td><?php echo FormatRupiah(70000)?></td>
                <td>5</td>
                <td><?php echo FormatRupiah(350000)?></td>
            </tr>
            <tr>
                <th>3</th>
                <td>Tas</td>
                <td><?php echo FormatRupiah(12000)?></td>
                <td>10</td>
                <td><?php echo FormatRupiah(120000)?></td>
            </tr>
        </tbody>
    </table><br>
</body>
</html>
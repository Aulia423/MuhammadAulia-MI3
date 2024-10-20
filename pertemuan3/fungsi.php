<?php

function LuasLingkaran($r){
    $luas = 3.14 *( $r * $r);
    return $luas;
}

echo "Luas Lingkaran = " . LuasLingkaran(5);
echo "<hr>"	;
function kosong($a,$b){
    $hasil = $a + $b;
    return $hasil;
}

echo "Penjumlahan 5 + 6 = " .kosong(5,6)."<br>";
echo "Penjumlahan 10 + 30 = " .kosong(10,30)."<br>";
echo "<hr>";


function FormatRupiah($rupiah){ 
    $hasil = "Rp. ".number_format($rupiah, 2, ',', '.');
    return $hasil;
}

echo FormatRupiah(1000000);


?>


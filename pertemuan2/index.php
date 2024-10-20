<?php


// 1.pernyataan if

$nilai = 80;

if($nilai >= 60){
    echo "Selamat Anda Lulus";
    echo "<hr />";	
}


// 2.pernyataan else


$nilai = 60;

if($nilai >= 70){
    echo "Selamat Anda Lulus";
} else {
    echo "Anda Belum Lulus";
    echo "<hr />";	
}



// 3.Pernyataan elseIf

$nilai = 60;

if($nilai >= 70){
    echo "Lulus ujian dengan baik";
} elseif($nilai >= 40){
    echo "Lulus ujian dengan cukup";
        echo "<hr />";        	

} else {
    echo "Tidak lulus ujian";
}

// 4. Pernyataan switch

$hari = "senin";

switch($hari){
    case "senin";
        echo "Hari ini adalah senin";
        break;

    case "selasa";
        echo "Hari ini adalah selasa";   
        break;

    default;
        echo "Hari ini bukan senin atau selasa";
    
}   

        echo "<hr />";


// 5. Pernyataan for    

for($i = 1; $i <= 10; $i++){
    echo "literasi ke-$i <br />";   
}

// 6.Pernyataan While


$counter = 1;

while($counter <= 3){
    echo "literasi ke-$counter <br />";
    $counter++;
}


// 7. Pernyataan Do While


$counter = 1;

do{ 
    echo "literasi ke-$counter <br />";
    $counter++;
} while($counter <= 3); 

?>
<?php

$buah = array("Apel","jeruk","Pisang");
echo $buah[0]."<br>";
echo $buah[1]."<br>";
echo $buah[2]."<br>";
echo "<hr/>";
foreach($buah as $buahbaru){
    echo $buahbaru."<br/>";
}       
echo "<hr/>";


$mhs = array(
    "nama" => "Muhammad Aulia",
    "prodi" => "Manajemen Informatika",
    "usia" => 19,
    "alamat" => "Jalan Tuanku Imam Bonjol"
);
echo "Nama Mahasiswa :$mhs[nama]<br>";
echo "Prodi:$mhs[prodi]<br>";
echo "usia :$mhs[usia]<br>";
echo "alamat :$mhs[alamat]<br>";
echo "<hr/>";


$nilaimhs = array(
    array(90,95,100),
    array(80,85,90),
    array(70,75,80),
    array(60,65,70),
    array(50,55,60)
);
echo $nilaimhs[0][0]." ";  
echo $nilaimhs[0][1]." ";
echo $nilaimhs[0][2]."<br />";
echo $nilaimhs[1][0]." ";
echo $nilaimhs[1][1]." ";
echo $nilaimhs[1][2]."<br /> ";
echo $nilaimhs[2][0]." ";
echo $nilaimhs[2][1]." ";
echo $nilaimhs[2][2]."<br /> ";
echo $nilaimhs[3][0]." ";
echo $nilaimhs[3][1]." ";
echo $nilaimhs[3][2]."<br /> ";
echo $nilaimhs[4][0]." ";
echo $nilaimhs[4][1]." ";
echo $nilaimhs[4][2]."<br /> ";
echo "<hr />";




$nilaimahasiswa = array(
    array(
        "nama" => "Muhammad Aulia",
        "tugas" => "90",
        "uts" => "95",
        "uas" => "100",
    ),
    array(
        "nama" => "Muhammad Aditya",
        "tugas" => "80",
        "uts" => "85",
        "uas" => "90",
    ),
    array(
        "nama" => "Farhan Ahmad",
        "tugas" => "70",
        "uts" => "75",
        "uas" => "80",
    ),
    array(
        "nama" => "Muhammad Rifqi",	
        "tugas" => "60",
        "uts" => "65",
        "uas" => "70",  
    ),
    array(
        "nama" => "Muhammad Fadhil",
        "tugas" => "50",
        "uts" => "55",
        "uas" => "60",
    )
);
?>

<table border="1" cellspacing="0" cellpadding="7">
    <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>Nilai Tugas</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
    </tr>
<?php
    $no=0;
    foreach($nilaimahasiswa as $nilai){
        $no++;
    ?>
        <tr>
            <td><?= $no;?></td>
    <?php
        foreach($nilai as $key=>$value){
        ?>
            <td><?= $value;?></td>
        <?php
        }
        ?>
        </tr>
    <?php
    }
?>
</table>
<?php
// ini sebuah komentar
/* ini juga komentar */
# ini juga komentar kres

// echo "Hello world <br>";
// print_r("Kyla <br>");
// var_dump("STT Nurul Fikri");

// membuat variabel user
// $nama = "Kyla";
// $umur = 18;
// $berat = 53.3;
// $mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya $umur <br>";
// echo "Berat badan saya mencapai $berat kg";

// Membuat variabel sistem
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];

// Membuat variabel konstanta
// define('PHI', 3.14);
// $jari = 10;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari = $luas <br>";
// echo "Luas lingkaran dengan jari-jari $jari = $keliling";

// Membuat Array
$programs = ["PHP", "Javascript", "HTML", "CSS"];
// echo $programs[0];
echo "jumlah data variabel programs sebanyak " . count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}

?>
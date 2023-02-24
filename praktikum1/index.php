<?php
// ini sebuah komentar
/* ini juga sebuah komentar */
# komentar pake simbol kres

echo "Hello World <br> ";
echo 'Hello World <br> ';
print_r("Muhammad Furqon Rizqi <br> ");
var_dump("STT NURUL FIKRI");
echo "<hr>";

$nama = "Muhammad Furqon Rizqi";
$umur = 18;
$berat = 50.5 ;
$mahasiswa = true;

echo"Nama saya $nama <br>";
echo"Umur saya sekarang adalah $umur tahun <br>";
echo"Berat saya $berat kg <br>";
echo "<hr>";


// membuat array
$programs = ["php", "javascript", "html", "css"];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}
?>


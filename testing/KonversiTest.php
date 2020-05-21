<?php

require("../model/Konversi.php");

$konversi = new Konversi();

//Test case 1
$nilai     = 81;
$grade     = "A";
$exp1       = "Input Berhasil!";
$result1    = $konversi->nilai($nilai, $grade);

if ($result1 == $exp1) {
  echo "Test case 1 sesuai expetasi";
  echo "<br>";
  $testResult1 = true;
} else {
  echo "Test case 1 tidak sesuai expetasi";
  echo "<br>";
  $testResult1 = false;
}

//Test case 2
$nilai      = 76;
$grade      = "AB";
$result2    = $konversi->nilai($nilai, $grade);

if ($result2 == $exp1) {
  echo "Test case 2 sesuai expetasi";
  echo "<br>";
  $testResult2 = true;
} else {
  echo "Test case 2 tidak sesuai expetasi";
  echo "<br>";
  $testResult2 = false;
}

//Test case 3
$nilai      = 74;
$grade      = "B";
$result3    = $konversi->nilai($nilai, $grade);

if ($result3 == $exp1) {
  echo "Test case 3 sesuai expetasi";
  echo "<br>";
  $testResult3 = true;
} else {
  echo "Test case 3 tidak sesuai expetasi";
  echo "<br>";
  $testResult3 = false;
}

//Test case 4
$nilai      = 64;
$grade      = "BC";
$result4    = $konversi->nilai($nilai, $grade);

if ($result4 == $exp1) {
  echo "Test case 4 sesuai expetasi";
  echo "<br>";
  $testResult4 = true;
} else {
  echo "Test case 4 tidak sesuai expetasi";
  echo "<br>";
  $testResult4 = false;
}

//Test case 5
$nilai      = 59;
$grade      = "C";
$result5    = $konversi->nilai($nilai, $grade);

if ($result5 == $exp1) {
  echo "Test case 5 sesuai expetasi";
  echo "<br>";
  $testResult5 = true;
} else {
  echo "Test case 5 tidak sesuai expetasi";
  echo "<br>";
  $testResult5 = false;
}

//Test case 6
$nilai      = 59;
$grade      = "CD";
$result6    = $konversi->nilai($nilai, $grade);

if ($result6 == $exp1) {
  echo "Test case 6 sesuai expetasi";
  echo "<br>";
  $testResult6 = true;
} else {
  echo "Test case 6 tidak sesuai expetasi";
  echo "<br>";
  $testResult6 = false;
}

//Test case 7
$nilai      = 45;
$grade      = "D";
$result7    = $konversi->nilai($nilai, $grade);

if ($result7 == $exp1) {
  echo "Test case 7 sesuai expetasi";
  echo "<br>";
  $testResult7 = true;
} else {
  echo "Test case 7 tidak sesuai expetasi";
  echo "<br>";
  $testResult7 = false;
}

//Test case 8
$nilai      = 1;
$grade      = "E";
$result8    = $konversi->nilai($nilai, $grade);

if ($result8 == $exp1) {
  echo "Test case 8 sesuai expetasi";
  echo "<br>";
  $testResult8 = true;
} else {
  echo "Test case 8 tidak sesuai expetasi";
  echo "<br>";
  $testResult8 = false;
}

//Test case 9
$nilai      = 1000;
$grade      = null;
$exp2       = 'Batas maksimal nilai yang dikonversi adalah 100, harap periksa kembali input Anda';
$result9    = $konversi->nilai($nilai, $grade);

if ($result9 == $exp2) {
  echo "Test case 9 sesuai expetasi";
  echo "<br>";
  $testResult9 = true;
} else {
  echo "Test case 9 tidak sesuai expetasi";
  echo "<br>";
  $testResult9 = false;
}

//Test case 10
$nilai      = -1;
$grade      = null;
$exp3       = 'Program tidak dapat menerima nilai minus, harap periksa kembali input Anda';
$result10   = $konversi->nilai($nilai, $grade);

if ($result10 == $exp3) {
  echo "Test case 10 sesuai expetasi";
  echo "<br>";
  $testResult10 = true;
} else {
  echo "Test case 10 tidak sesuai expetasi";
  echo "<br>";
  $testResult10 = false;
}
//Kesimpulan
if (
  $testResult1 == true && $testResult2  == true &&
  $testResult3  == true && $testResult4  == true &&
  $testResult5  == true && $testResult6  == true &&
  $testResult7  == true && $testResult8  == true &&
  $testResult9  == true && $testResult10 == true
) {
  echo "Semua jalur berhasil di eksekusi";
} else {
  echo "Terdapat jalur yang tidak di eksekusi";
}

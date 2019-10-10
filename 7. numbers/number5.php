<?php //PHP is_numeric () fungsi dapat digunakan untuk menemukan apakah suatu variabel numerik. fungsi mengembalikan nilai true jika variabel adalah angka atau string numerik, false jika tidak.//
//Periksa apakah variabel numerik.//
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?> 
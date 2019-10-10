<?php //Kadang-kadang Anda perlu melemparkan nilai numerik ke dalam tipe data yang lain.//

//The (int), (integer), atau intval function () sering digunakan untuk mengkonversi nilai ke integer.//
//Cast mengambang dan tali ke integer//
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?> 
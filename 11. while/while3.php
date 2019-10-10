<?php //Perhatikan bahwa dalam do whilelingkaran kondisi diuji SETELAH mengeksekusi laporan dalam loop. Ini berarti bahwa do whilelingkaran akan mengeksekusi pernyataan yang setidaknya sekali, bahkan jika kondisi salah pertama kalinya.//
//Contoh di bawah set $ x variabel untuk 6, kemudian berjalan loop, dan kemudian kondisi diperiksa//
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?> 
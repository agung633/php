<?php //The if...elseif...elsepernyataan mengeksekusi kode yang berbeda selama lebih dari dua kondisi.//
// Output "Selamat pagi!" jika waktu saat ini kurang dari 10, dan "Memiliki hari yang baik!" jika waktu saat ini kurang dari 20. Jika tidak, akan menampilkan "Have a good night!"//
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?> 
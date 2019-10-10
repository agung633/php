<?php //The if...elsepernyataan mengeksekusi beberapa kode jika kondisi benar dan kode lain jika kondisi itu adalah palsu.//
//Output "Memiliki hari yang baik!" jika waktu saat ini kurang dari 20, dan "Memiliki malam yang baik!" jika tidak.//
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?> 
<?php //The ifpernyataan mengeksekusi beberapa kode jika salah satu kondisi benar.//
// Output "Memiliki hari yang baik!" jika waktu saat (JAM) kurang dari 20.//

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?> 
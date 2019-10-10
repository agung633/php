<?php declare(strict_types=1); // strict requirement
//Dibawah menunjukkan bagaimana menggunakan parameter default. Jika kita memanggil fungsi setHeight () tanpa argumen dibutuhkan nilai default sebagai argumen.//
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?> 
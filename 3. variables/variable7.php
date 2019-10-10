<?php //The globalkata kunci digunakan untuk mengakses variabel global dari dalam fungsi.//

//Untuk melakukan hal ini, gunakan globalkata kunci sebelum variabel (dalam fungsi)//
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?> 
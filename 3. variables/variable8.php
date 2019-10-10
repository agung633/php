<?php //Array ini juga dapat diakses dari dalam fungsi dan dapat digunakan untuk memperbarui variabel global secara langsung.$GLOBALS[index]index.//
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?> 
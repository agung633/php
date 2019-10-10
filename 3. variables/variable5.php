<?php //Sebuah variabel dideklarasikan di luar fungsi memiliki LINGKUP GLOBAL dan hanya dapat diakses di luar fungsi.//

$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?> 
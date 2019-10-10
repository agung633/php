<?php //Konstanta secara otomatis global dan dapat digunakan di seluruh naskah.//
//Contoh ini menggunakan sebuah konstanta dalam fungsi, bahkan jika itu didefinisikan di luar fungsi.//
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();
?> 
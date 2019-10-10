<?php //Untuk loop melalui dan mencetak semua nilai-nilai array diindeks, Anda bisa menggunakan forlingkaran.//
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?> 
<?php declare(strict_types=1); // strict requirement
//Anda dapat menentukan jenis yang berbeda kembali, daripada jenis argumen, tapi pastikan pengembalian adalah jenis yang tepat.//
function addNumbers(float $a, float $b) : int {
    return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
?> 
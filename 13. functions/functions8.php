<?php declare(strict_types=1); // strict requirement
//Untuk menyatakan tipe untuk fungsi kembali, menambahkan usus ( :) dan jenis yang tepat sebelum pembukaan keriting ( {) braket ketika mendeklarasikan fungsi.//
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2);
?> 
<?php
function pembagian_bulat($a, $b)
{
    $hasil = 0;
    while ($a >= $b) {
        $a -= $b;
        $hasil++;
    }

    return $hasil;
}

$bilangan_1 = 7;
$bilangan_2 = 2;

$hasil_pembagian = pembagian_bulat($bilangan_1, $bilangan_2);
echo "$bilangan_1 : $bilangan_2 = $hasil_pembagian";

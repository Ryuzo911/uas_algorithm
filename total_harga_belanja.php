<?php

$belanjaan = array(
    "baju" => 100000,
    "sepeda" => 2000000,
    "laptop" => 10000000,
    "mouse" => 500000
);

$total = array_sum($belanjaan);

echo "Total pengeluaran saya hari ini sebesar Rp.$total";

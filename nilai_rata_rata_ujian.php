<?php

$nilai = [
    "bahasa_indonesia"  => 90,
    "matematika" => 70,
    "biologi" => 65,
    "kimia" => 100
];

$total = array_sum($nilai);
$hitung = count($nilai);
$rata_rata = $total / $hitung;

echo "Nilai rata-rata anda adalah $rata_rata";
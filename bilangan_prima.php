<?php

function isPrime($angka) {
    if ($angka <= 1) {
        return "Tidak, $angka bukan merupakan bilangan prima";
    }
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return "Tidak, angka $angka bukan merupakan bilangan prima";
        }
    }
    return "Ya, angka $angka merupakan bilangan prima";
}

echo isPrime(10) ;  

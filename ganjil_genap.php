<?php

$angka = 7; 

function getJenisAngka($angka) {
    if ($angka % 2 == 0) {
        return "genap";
    } else {
        return "ganjil";
    }
}

$jenisAngka = getJenisAngka($angka);

echo "Angka $angka merupakan sebuah angka $jenisAngka.";
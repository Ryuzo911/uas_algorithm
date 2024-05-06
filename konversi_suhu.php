<?php

function konversiKeKelvin($celcius) {
    return $celcius + 273.15;
}

$kelvin = konversiKeKelvin(80);
echo $kelvin;
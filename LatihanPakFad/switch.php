<?php

$angka = 1000;

switch($angka){
    case '1':
        echo "Ini adalah angka 1";
        break;

    case '2':
        echo "Ini adalah angka 2";
        break;

    case '3':
        echo "Ini adalah angka 3";
        break;

    case '4':
        echo "Ini adalah angka 4";
        break;

    case '9':
        echo "Ini adalah angka 9";
        break;

    default:
        echo "angka yang anda masukkan ", $angka;
        break;
}
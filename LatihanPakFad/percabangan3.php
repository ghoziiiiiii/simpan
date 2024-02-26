<?php

$nilai =101;
if ($nilai >= 85 and $nilai <=100){
    echo "Predikat A";
}elseif ($nilai >= 75 and $nilai <=84){
    echo "Predikat B";
}elseif ($nilai >= 60 and $nilai <=74){
    echo "Predikat C";
}elseif ($nilai >= 50 and $nilai <=59){
    echo "Predikat D";
}elseif ($nilai >= 0 and $nilai <=49){
    echo "Predikat E";
}else{
    echo "Data Invalid";
}
?>
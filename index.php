<?php

include "Motor.php";
$motor1 = new Motor("Honda", "PCX 160");
$motor1->warna = "Hitam";
$motor1->tahun = 2026;
$motor1->harga = 32000000;

$motor2 = new Motor("Yamaha", "Nmax Neo");
$motor2->warna = "merah";
$motor2->tahun = 2026;
$motor2->harga = 31000000;

echo "<h3>Motor 1</h3>";
$motor1->info();
$motor1->nyalakan();
$motor1->servis();

echo "<br>";

echo "<h3>Motor 2</h3>";
$motor2->info();
$motor2->nyalakan();
$motor2->servis();
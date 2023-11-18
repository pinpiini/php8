<?php

echo "<h1>Array 2 Dimensi</h1>";
 $nama = [
    ["Joko", "Jurnalistik","Laki-Laki", 16],
    ["Hamidah", "Programming", "Perempuan",17],
    ["Ayu", "Sekretaris", "Perempuan", 16],
];

var_dump($nama);
echo "<br>";
echo $nama [1][1];

echo "<h2>Array 2 Dimensi - Array Assosiatif</h2>";
$nilai = [
    "Jessica" => [
        "Matematika" => 80,
        "PPKn" => 75,
        "Fisika" => 85,
    ],
    "Fairuz" => [
        "Matematika" => 85,
        "PPKn" =>20,
        "Fisika" => 40,
    ],
    "Orel" => [
        "Matematika" => 20,
        "PPKn" => 70,
        "Fisika" => 20,
    ],
];
var_dump($nilai);
echo "<br>";
echo $nilai["Fairuz"]["PPKn"];
echo '<pre>' . var_export($nilai, true).'<pre>';
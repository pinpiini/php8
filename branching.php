<?php


$hari ="Hujan";
if ($hari == "Cerah") {
    echo "Saya Bawa Payung";

}

echo "<hr>";

if ($hari == "Hujan") {
    echo "Saya Bawa Payung";

} else {
    echo "Saya Tidak Bawa Payung";
}

echo "<hr>";

echo "Nilai anda adalah";
echo "<br>";
$nilai ="99";

if ($nilai > 75 and $nilai <=100) {
    echo "Nilai saya $nilai, Saya <b>Lulus</b>";
}  elseif ($nilai >= 0 and $nilai <=75) {
    echo "Nilai saya $nilai, Saya <b> Tidak Lulus</b>";
}
else{
    echo "Nilai saya $nilai, <b>Tidak ada nilai seperti itu</b>";
}

echo "<hr>";

if ($nilai >=91 and $nilai <=100) :
    echo "nilai anda $nilai, Nilai anda A";
elseif ($nilai >= 83 and $nilai < 91) :
    echo "nilai anda $nilai, nilai anda B";
elseif ($nilai >= 75 and $nilai < 83) :
    echo "nilai anda $nilai, nilai anda C";
elseif ($nilai >= 0 and $nilai < 75) :
    echo "nilai anda $nilai, nilai anda D";
else :
        echo "nilai anda $nilai, tidak ada penilaian seperti ini";
endif;

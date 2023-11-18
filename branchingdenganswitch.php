<?php

function getNilaiHuruf($nilai) {
    if ($nilai >= 90) {
        return 'A+';
    } elseif ($nilai >= 85 && $nilai < 90) {
        return 'A';
    } elseif ($nilai >= 80 && $nilai < 85) {
        return 'A-';
    } elseif ($nilai >= 75 && $nilai < 80) {
        return 'B+';
    } elseif ($nilai >= 70 && $nilai < 75) {
        return 'B';
    } elseif ($nilai >= 65 && $nilai < 70) {
        return 'B-';
    } elseif ($nilai >= 60 && $nilai < 65) {
        return 'C+';
    } elseif ($nilai >= 55 && $nilai < 60) {
        return 'C';
    } elseif ($nilai >= 50 && $nilai < 55) {
        return 'C-';
    } else {
        return 'D';
    }
}

function getBobot($nilaiHuruf) {
    switch ($nilaiHuruf) {
        case 'A+':
        case 'A':
            return 4;
        case 'A-':
            return 3.7;
        case 'B+':
            return 3.3;
        case 'B':
            return 3;
        case 'B-':
            return 2.7;
        case 'C+':
            return 2.3;
        case 'C':
            return 2;
        case 'C-':
            return 1.7;
        default:
            return 0;
    }
}

$nilaiAngka1 = 50;
$nilaiAngka2 = 72;
$nilaiAngka3 = 94;
$nilaiAngka4 = 60;
$nilaiAngka5 = 78;

echo "<h1>Branching</h1>
      <table border='2'>
          <tr>
              <th>Nilai Angka</th>
              <th>Nilai Huruf</th>
              <th>Bobot</th>
          </tr>";

for ($i = 1; $i <= 5; $i++) {
    $nilaiAngka = ${"nilaiAngka$i"};
    $nilaiHuruf = getNilaiHuruf($nilaiAngka);
    $bobot = getBobot($nilaiHuruf);

    echo "<tr>
            <td>{$nilaiAngka}</td>
            <td>{$nilaiHuruf}</td>
            <td>{$bobot}</td>
          </tr>";
}

echo "</table>";

?>

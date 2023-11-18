<?php

function isPrime($angka)
{
    if ($angka< 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i === 0) {
            return false;
        }
    }

    return true;
}

echo "<table border='1'>";
echo "<tr><th>Bilangan Prima</th></tr>";

for ($i = 0; $i <= 50; $i++) {
    if (isPrime($i)) {
        echo "<tr><td>$i</td></tr>";
    }
}

echo "</table>";

?>

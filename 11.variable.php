<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP</h1>
    <?php 
    $nama_lengkap = "Rafi Akbar";
    $angka = 29;

    print "nama saya $nama_lengkap";
    echo "nama saya $nama_lengkap" . $nama_lengkap;
    echo "<br>";

    $angka1 = 32;
    print "$angka1";
    define("PI", 3.14);
    echo "<hr>";
    echo PI;
    ?>
</body>
</html>
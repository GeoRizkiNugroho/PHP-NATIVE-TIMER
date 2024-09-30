<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Pecahan Uang</title>
</head>
<body>
    <h1>Hitung Pecahan Uang Rupiah</h1>

    <?php
    function hitungPecahanUang($jumlah) {
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
        $hasil = [];
        foreach ($pecahan as $nominal) {
            $lembar = intval($jumlah / $nominal);
            $jumlah %= $nominal;
            if ($lembar > 0) {
                $hasil[$nominal] = $lembar;
            }
        }
        return $hasil;
    }

    $uang = 140500; 
    $pecahan = hitungPecahanUang($uang);
    echo "<h2>Jumlah uang: Rp. " . number_format($uang, 0, ',', '.') . "</h2>";
    echo "<ul>";
    foreach ($pecahan as $nominal => $lembar) {
        echo "<li>Rp. " . number_format($nominal, 0, ',', '.') . " : " . $lembar . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>

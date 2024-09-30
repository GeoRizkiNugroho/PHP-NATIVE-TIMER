<?php
$usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

$kategoriDewasa = [];
$kategoriAnak = [];

foreach ($usia as $age) {
    if ($age >= 17) {
        $kategoriDewasa[] = $age;
    } else {
        $kategoriAnak[] = $age;
    }
}

echo "List Usia: " . implode(", ", $usia) . "<br>";
echo "Jumlah kategori dewasa: " . count($kategoriDewasa) . "<br>";
echo "Jumlah kategori anak-anak: " . count($kategoriAnak) . "<br>";
?>

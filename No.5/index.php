<?php

$variabel1 = [77, 55, 90, 80, 65];
$variabel2 = [77, 55, 90, 89, 123, 86];

$kelompok_sama = array_intersect($variabel1, $variabel2);


$kelompok_tidak_sama = array_merge(array_diff($variabel1, $variabel2), array_diff($variabel2, $variabel1));


echo "Bilangan yang ada di kedua variabel: <br> " . implode(", ", $kelompok_sama);
echo "<br>";
echo "Bilangan yang tidak ada di kedua variabel: <br> " . implode(", ", $kelompok_tidak_sama);
?>
    
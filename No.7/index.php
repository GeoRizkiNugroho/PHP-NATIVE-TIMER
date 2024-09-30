<?php
$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya Legina";

echo "<h2> Nama Pertama: $nama1
    <br>
    Nama Kedua: $nama2</h2>";

$selisih = strlen($nama1) - strlen($nama2);

echo $selisih > 0 ? "$nama1 lebih panjang $selisih karakter" :
    ($selisih < 0 ? "$nama2 lebih panjang " . abs($selisih) . " karakter" : "Keduanya sama panjang");
?>

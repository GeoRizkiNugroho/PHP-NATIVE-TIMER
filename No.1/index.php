<?php
$teks = "Selamat Ulang Tahun yang ke-17!";

function cekAngka($teks) {
    if (preg_match('/\d+/', $teks, $angka)) {
        echo "Teks : " . $teks;
        echo "<br>";
        echo "Teks mengandung angka: " . $angka[0];
    } else {
        echo "Teks tidak mengandung angka";
    }
}

cekAngka($teks);
?>
                                                                                                                                              
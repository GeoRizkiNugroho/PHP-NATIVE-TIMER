<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kompensasi Lembur</title>
</head>
<body>
    <?php
        $jamMulai = 8;
        $jamPulang = 22;

        $jamKerja = $jamPulang - $jamMulai;
        $jamLembur = $jamKerja - 8;

        $kompensasi = 0;
        if ($jamLembur > 0) {
            $kompensasi += 50000;
            if ($jamLembur > 0  ) {
                $kompensasi += ($jamLembur - 1) * 25000;
            }
        }

        echo "Lama kerja: $jamKerja Jam<br>";
        echo "Jam lembur: $jamLembur Jam<br>";
        echo "Jumlah gaji tambahan: Rp." . number_format($kompensasi, 0, ',', '.') . ".";
    ?>
</body>
</html>

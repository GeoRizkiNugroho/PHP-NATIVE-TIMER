<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Nilai</title>
</head>
<body>
    <?php
    $data = [80, 90, 75, 100, 85, 100, 66];
    echo "Data: " . implode(", ", $data) . "<br>";

    $cari = 100;
    $count = array_count_values($data)[$cari] ?? 0;

    echo "<p>Nilai $cari muncul sebanyak $count kali dalam array.</p>";
    ?>
</body>
</html>

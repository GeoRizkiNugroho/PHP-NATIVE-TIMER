<?php
$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

$averages = [];
foreach ($students as $student) {
    $average = array_sum($student['nilai']) / count($student['nilai']);
    $averages[$student['nama']] = $average;
}



$no = 1;
foreach ($averages as $nama => $average) {
    echo $no . ". " . $nama . " = " . $average . "<br>";
    $no++;
}
?>

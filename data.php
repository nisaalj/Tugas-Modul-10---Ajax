<?php
header('Content-Type: application/json');

$profil = [
    ['nama' => 'Budi', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Jakarta'],
    ['nama' => 'Sari', 'pekerjaan' => 'UI Designer',   'lokasi' => 'Bandung'],
    ['nama' => 'Andi', 'pekerjaan' => 'Data Analyst',  'lokasi' => 'Surabaya'],
];

echo json_encode($profil);
?>
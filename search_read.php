<?php
require_once "config.php";

// Objek dan kriteria pencarian
$object = 'res.partner';
$domain = []; // filter
$fields = ['name', 'email', 'phone'];

// Menggunakan metode search_read
$records = $models->execute_kw($db, $uid, $password,
    $object, 'search_read',
    [$domain],
    [
        'fields' => $fields,
        'limit'=>10 // memberi batas data yang akan ditampilkan
    ]
);

echo "<pre>";
// Menampilkan hasil
foreach ($records as $record) {
    echo "Nama: " . $record['name'] . "\n";
    echo "Email: " . $record['email'] . "\n";
    echo "Telepon: " . $record['phone'] . "\n";
    echo "----------------\n";
}

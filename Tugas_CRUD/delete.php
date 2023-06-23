<?php

$file = "mahasiswa.json";


$anggota = file_get_contents($file);


$data = json_decode($anggota, true);


$nim = $_GET['nim'];
foreach ($data as $key => $d) {
   
    if ($d['nim'] === $nim) {
      
        array_splice($data, $key, 1);
    }
}

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);
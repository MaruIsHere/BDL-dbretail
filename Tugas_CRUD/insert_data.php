<?php

$file = "mahasiswa.json";


$anggota = file_get_contents($file);


$data = json_decode($anggota, true);


$data [] = array(
    "nim"     => $_POST['nim'],
    "nama"   => $_POST['nama'],
    "no_tlp"   => $_POST['no_tlp'],
    "jns_kelamin"   => $_POST['jns_kelamin'],
    "alamat" => $_POST['alamat'],
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);
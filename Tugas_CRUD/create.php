<?php

$data [] = array(
    'nim'     => '2200932032',
    'nama'   => 'Rudi',
    'no_tlp' => '0898308042',
    'jns_kelamin' => 'Laki-Laki',
    'alamat' => 'Nganjuk'
);


$data [] = array(
    'nim'     => '224029024',
    'nama'   => 'Dian',
    'no_tlp' => '22439033',
    'jns_kelamin' => 'Perempuan',
    'alamat' => 'Madiun'
);


$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('mahasiswa.json', $jsonfile);
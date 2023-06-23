<?php

$file = "mahasiswa.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, true);

$nim = $_POST['nim'];
foreach ($data as $key => $d) {
    if ($d['nim'] === $nim) {
        $data[$key]['nama'] = $_POST['nama'];
        $data[$key]['no_tlp'] = $_POST['no_tlp'];
        $data[$key]['jns_kelamin'] = $_POST['jns_kelamin'];
        $data[$key]['alamat'] = $_POST['alamat'];
    }
}

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);

?>

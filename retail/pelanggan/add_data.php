<?php

$file = file_get_contents('pelanggan.json');
$data_pelanggan = json_decode($file);

$data_pelanggan[] = array(
    "id_pelanggan" => $_POST['id_pelanggan'],
    "nama_pelanggan" => $_POST['nama_pelanggan'],
    "alamat_pelanggan" => $_POST['alamat_pelanggan'],
    "tlp_pelanggan" => $_POST['tlp_pelanggan'],
    "pekerjaan" => $_POST['pekerjaan'],
);

$json_pelanggan_update = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('pelanggan.json',$json_pelanggan_update);
header('location:view.php');
?>
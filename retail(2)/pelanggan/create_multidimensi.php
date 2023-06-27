<?php

$data_pelanggan[] = array(
                    'id_pelanggan' => 'P001',
                    'nama_pelanggan' => array('nama_depan' => 'made', 'nama_belakang' => 'sandhiyasa'),
                    'alamat_pelanggan' => array('alamat_ktp' => 'Jalan Tukad Pakerisan','alamat_domisil' => 'jalan gutita III'),
                    'tlp_pelanggan' => '08372982681',
                    'pekerjaan' => 'swasta'
);

#json_encode adalah mengubah array menajdi json
$json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('pelanggan_multidimensi.json',$json_pelanggan);

#membaca array nama
$file = file_get_contents('pelanggan_multidimensi.json');
$data_pelanggan_multidimensi = json_decode($file);
print_r($data_pelanggan_multidimensi[0]->nama_pelanggan->nama_depan);

#menampilkan semua nama
foreach ($data_pelanggan_multidimensi as $pelanggan){
    echo $pelanggan->nama_pelanggan->nama_belakang.'<br>';
}



?>
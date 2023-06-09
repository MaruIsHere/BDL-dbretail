<?php

$data_pelanggan[] = array(
                    'id_pelanggan' => 'P001',
                    'nama_pelanggan' => 'Made',
                    'alamat_pelanggan' => 'Jalan Tukad Pakerisan',
                    'tlp_pelanggan' => '08372982681',
                    'pekerjaan' => 'swasta'
);


$data_pelanggan[] = array(
                    'id_pelanggan' => 'P002',
                    'nama_pelanggan' => 'Wayan',
                    'alamat_pelanggan' => 'Jalan Tukad Pakerisan II',
                    'tlp_pelanggan' => '08372347839',
                    'pekerjaan' => 'programmer'
);

$data_pelanggan[] = array(
                    'id_pelanggan' => 'P003',
                    'nama_pelanggan' => 'Komang',
                    'alamat_pelanggan' => 'Jalan Tukad Pakerisan III',
                    'tlp_pelanggan' => '08377367462',
                    'pekerjaan' => 'designer'
);


$json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('pelanggan.json',$json_pelanggan);

#json_encode adalah mengubah array menajdi json

?>
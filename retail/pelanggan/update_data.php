<?php
//membaca data json
$val_id_pelanggan = $_POST['id_pelanggan'];//id pelanggan yang ada di pelanggan.json
//value baru atau nilai baru yang ingin diubah
$val_nama_pelanggan = $_POST['nama_pelanggan'];
$val_alamat_pelanggan = $_POST['alamat_pelanggan'];
$val_tlp_pelanggan= $_POST['tlp_pelanggan'];
$val_pekerjaan= $_POST['pekerjaan'];
$file = file_get_contents('pelanggan.json');
$data_pelanggan = json_decode($file);

//mencari index dari key yang kita punya
foreach ($data_pelanggan as $key => $value){
    //kondisi untuk mencari index dari value id_pelanggan(target)
    if($value->id_pelanggan==$val_id_pelanggan){
        $data_pelanggan[$key]->nama_pelanggan = $val_nama_pelanggan;
        $data_pelanggan[$key]->alamat_pelanggan = $val_alamat_pelanggan;
        $data_pelanggan[$key]->tlp_pelanggan = $val_tlp_pelanggan;
        $data_pelanggan[$key]->pekerjaan = $val_pekerjaan;
    }
}
$json_pelanggan_update = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('pelanggan.json',$json_pelanggan_update);
?>
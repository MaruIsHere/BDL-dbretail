<?php

$file = "mahasiswa.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data View</title>
</head>
<body>



<table>
    <form action="update_data.php" method="Post">
        <tr>
            <td>Nama:</td>
            <td>Nomor Telephone</td>
            <td>Jenis Kelamin:</td>
            <td>Alamat:</td>
        </tr>
        <tr>
            <?php $nim = $_GET['nim']; ?>
            <?php foreach($data as $key => $d) :  ?>
            <?php if($d['nim'] === $nim) : ?>
           
                <input type="hidden" id="nim" name="nim" value="<?= $d['nim']; ?>">
            <td>
                <input type="text" id="nama"  name="nama" value="<?= $d['nama']; ?>">
            </td>
            <td>
                <input type="number" id="no_tlp"  name="no_tlp" value="<?= $d['no_tlp']; ?>">
            </td>
            <td>
                <input type="text" id="jns_kelamin"  name="jns_kelamin" value="<?= $d['jns_kelamin']; ?>">
            </td>
            <td>
                <input type="text" id="alamat" name="alamat" value="<?= $d['alamat']; ?>">
            </td>
            
            <?php endif; ?>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>
                <button type="submit">Update</button>
            </td>
        </tr>
         
    </form>
</table>
    
</body>
</html>
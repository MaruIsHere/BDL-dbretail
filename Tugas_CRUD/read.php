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
    <title>Read Data</title>
</head>
<body>


<table border="1px solid black">
    <tr>
    <td><a href="insert_data_view.php">Tambah</a></td>
    </tr>
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>No Telephone</th>
        <th>Jensi Kelamin</th>
        <th>Alamat</th>
        <th>Edit</th>
        <th></th>
    </tr>
<?php foreach($data as $d): ?>
    <tr>
        <td><?= $d['nim'];?></td>
        <td><?= $d['nama'];?></td>
        <td><?= $d['no_tlp'];?></td>
        <td><?= $d['jns_kelamin'];?></td>
        <td><?= $d['alamat'];?></td>
        <td><a href="update_data_view.php?nim=<?= $d['nim']; ?>">Update</a></td>
        <td><a href="delete.php?nim=<?= $d['nim']; ?>">Delete</a></td>
    </tr>

<?php endforeach; ?>
</table>

    
</body>
</html>
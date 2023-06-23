<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <a href="add_data_view.php" class=" btn btn-primary">Tambah Data</a>
        </div>


        <div class="row">

            <div class="col-12">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tlp</th>
                            <th>Pekerjaan</th>
                            <th>Action</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $file = file_get_contents('pelanggan.json');
                        $data_pelanggan = json_decode($file);
                        foreach($data_pelanggan as $key =>$pelanggan) { ?>
                            <tr>
                            <td> <?php  echo $pelanggan->id_pelanggan ?> </td>
                            <td> <?php  echo $pelanggan->nama_pelanggan ?> </td>
                            <td> <?php  echo $pelanggan->alamat_pelanggan ?> </td>
                            <td> <?php  echo $pelanggan->tlp_pelanggan ?> </td>
                            <td> <?php  echo $pelanggan->pekerjaan ?> </td>
                            <td><a href="update_data_view.php?key=<?php echo $key; ?>"; class="btn btn-success text-light">Update</a></td>
                            <td><a href="delete.php?key=<?php echo $key; ?>" class="btn btn-danger text-light">Delete</a></td>
                            </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
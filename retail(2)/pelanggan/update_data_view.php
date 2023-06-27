<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <div class="row border border-secondary rounded-1 p-2">
       
        <div  class="col-12 bg-primary text-center text-light border rounded p-2" >
            <h2><b>Update Data View</b></h2>
        </div>

        <?php
            $file = file_get_contents('pelanggan.json');
            $data_pelanggan = json_decode($file);
            $key = $_GET['key'];
        ?>
        <form action="update_data.php" method="Post">
            <div class="form-group  pt-2">
                <input type="hidden" class="form-control" id="id_pelanggan" name="id_pelanggan" value="<?= $data_pelanggan[$key]->id_pelanggan; ?>">
            </div>
            <div class="form-group  pt-2">
                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $data_pelanggan[$key]->nama_pelanggan; ?>">
            </div>
            <div class="form-group  pt-2">
                <label for="alamat_pelanggan">Alamat:</label>
                <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" value="<?= $data_pelanggan[$key]->alamat_pelanggan ?>">
            </div>
            <div class="form-group  pt-2">
                <label for="tlp_pelanggan">No Telephone:</label>
                <input type="text" class="form-control" id="tlp_pelanggan" name="tlp_pelanggan" value="<?= $data_pelanggan[$key]->tlp_pelanggan; ?>">
            </div>
            <div class="form-group  pt-2">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $data_pelanggan[$key]->pekerjaan; ?>">
            </div>
            <div class="col-12 pt-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        
    </div>
</div>
    
</body>
</html>
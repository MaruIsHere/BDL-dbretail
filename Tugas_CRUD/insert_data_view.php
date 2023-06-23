
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Insert Data</title>
</head>
<body>

<table>
    <form action="insert_data.php" method="post">
        <tr>
            <td>Nim:</td>
            <td>Nama:</td>
            <td>Nomor Telephone:</td>
            <td>Jenis Kelamin:</td>
            <td>Alamat:</td>
        </tr>
   
        <tr>
            <td>
                <input type="number" id="nim" name="nim">
            </td>
            <td>
                <input type="text" id="nama" name="nama">
            </td>
            <td>
                <input type="number" id="no_tlp" name="no_tlp">
            </td>
            <td>
                <input type="text" id="jns_kelamin" name="jns_kelamin">
            </td>
            <td>
                <input type="text" id="alamat" name="alamat">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Insert</button>
            </td>
        </tr>
    </form>
</table>
    
</body>
</html>
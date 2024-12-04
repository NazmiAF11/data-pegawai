<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hq, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>DATA PEGAWAI</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>POSISI</th>
                <th>GAJI</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $query = "SELECT + FROM pegawai";
    $result = mysql_query($koneksi,$query);
    $no =1;

    while ($row = mysql_fetch_assoc($result)){
        echo"
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>";
        $no++;
        }
        ?>
        </tbody>
    </table>
</body>
</html>
<?php
    include 'koneksi.php';
    
    $no = 1;
    $data = mysqli_query($kon,"select * from mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sertifikasi</title>
</head>
<body>
    <h1>Akademik</h1>
    <hr>
    <h2>Data Mahasiswa Sertifikasi</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID Sertifikasi</th>
            <th>NIM</th>
            <th>NAMA</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['id']?></td>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="./jsonn.php">JSON File</a>
</body>
</html>
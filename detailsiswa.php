<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h3>Data Siswa <?=$_GET["nama"];?></h3>
    <table border="1" cellpadding="3" cellspacing="1" width="100%">
        <tr>
            <td rowspan="3" align="left"><img width="300px" src="foto/<?=$_GET["img"]?>" alt=""></td>
            <td>Nama</td>
            <td><?=$_GET["nama"]?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?=$_GET["alamat"]?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><?=$_GET["no"]?></td>
        </tr>
    </table>
    <br>
    <a href="adminDataSiswa.php"><button>Kembali</button></a>
</body>
</html>
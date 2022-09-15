<?php




$data = [     
        [
        "nama" => "Bagas Rizky",
        "alamat" => "Wonorejo",
        "no" => "08999",
        "img" => "arya.jpg"
    ],
    [
        "nama" => "Ahmad Syahani",
        "alamat" => "Banyu Urip",
        "no" => "087591",
        "img" => "hani.jpg"
    ],
    [
        "nama" => "Aditya Virsyanda",
        "alamat" => "Pakis",
        "no" => "08123",
        "img" => "liel1.jpg"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h1>Data Siswa (admin)</h1>
    <table border="1" cellpadding="3" cellspacing="1" width="40%">
        <tr align="center">
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($data as $id => $nama) :?>
            <tr align="center">
                <td><?= $id + 1?></td>
                <td><img src="foto/<?= $nama['img'];?>" alt="" width="50%"></td>
                <td><?= $nama['nama']?></td>
                <td>
                    <a href="detailsiswa.php?nama=<?=$nama["nama"];?>&alamat=<?=$nama["alamat"];?>&no=<?=$nama["no"];?>&img=<?=$nama["img"]?>">
                        <button>Detail</button>
                    </a>
                </td>
            </tr>

        <?php endforeach?>
    </table>
</body>
</html>
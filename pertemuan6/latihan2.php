<?php
    $siswa = [
    [
        "nama" => "Eriy", 
        "nis" => "1914430", 
        "jurusan" => "Multimedia", 
        "email" => "eriysuratman@gmail.com", 
        "gambar" => "eriy.jpg"
    ],
    [
        "nama" => "Feriy", 
        "nis" => "1914431", 
        "jurusan" => "Teknik Mesin", 
        "email" => "feriysuratno@gmail.com", 
        "gambar" => "feriy.jpg"
    ],
    [
        "nama" => "Ricky",
        "nis" => "1914432",
        "jurusan" => "Desain",
        "email" => "rickyramdhani@gmail.com",
        "gambar" => "ricky.jpg"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <?php foreach ($siswa as $ssw) :?>
        <ul>
        <li>
            <img src="img/<?= $ssw["gambar"]?>" alt="">
        </li>
        <li>Siswa : <?= $ssw["nama"]; ?></li>
        <li>NIS : <?= $ssw["nis"]; ?></li>
        <li>Jurusan : <?= $ssw["jurusan"]; ?></li>
        <li>Email : <?= $ssw["email"]; ?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>
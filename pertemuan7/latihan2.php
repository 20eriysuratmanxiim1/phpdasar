<?php 
    // check apakah tidak ada di $_GET
    if(!isset($_GET['judulBuku'])
    || !isset($_GET['pengarang'])
    || !isset($_GET['tanggalTerbit'])
    || !isset($_GET['penerbit'])) {
        // redirect ke halaman index.php
        header('Location: latihan1.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <style>
        li{
            list-style: none;
        }
    </style>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
        <li><?= $_GET["judulBuku"]; ?></li>
        <li><?= $_GET["pengarang"]; ?></li>
        <li><?= $_GET["tanggalTerbit"]; ?></li>
        <li><?= $_GET["penerbit"]; ?></li>
    </ul>
    <a href="latihan1.php">Kembali ke halaman utama</a>
</body>
</html>
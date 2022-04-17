<?php 
    // Variabel Scope / lingkup variabel

    // $x = 10;

    // function tampilanX(){
    //     global $x;
    //     echo $x;
    // }
    
    // tampilanX();
    
    // SUPERGLOBALSssssssss
    // variable global milik PHP
    // merupakan Array Associative
    
    // $_GET
    $buku = [
    [
        "judulBuku" => "Atomic Habits", 
        "pengarang" => "James Clear", 
        "tanggalTerbit" => "15 Sep 2019", 
        "penerbit" => "Gramedia Pustaka Utama", 
        "gambar" => "gambar1.jpg"
    ],
    [
        "judulBuku" => "Start With Why", 
        "pengarang" => "Simon Sinek", 
        "tanggalTerbit" => "17 Jun 2019", 
        "penerbit" => "Gramedia Pustaka Utama", 
        "gambar" => "gambar2.jpg"
    ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        li{
            list-style: none;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($buku as $bk ): ?>
            <a href="latihan2.php?judulBuku=<?= $bk["judulBuku"]; ?>&pengarang=<?= $bk["pengarang"]; ?>&tanggalTerbit=<?= $bk["tanggalTerbit"]; ?>&penerbit=<?= $bk["penerbit"]; ?>&gambar=<?= $bk["gambar"]; ?>"><li><?= $bk["judulBuku"] ?></li></a>
        <?php endforeach; ?> 
    </ul>
</body>
</html>
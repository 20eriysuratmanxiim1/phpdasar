<?php 
    require 'functions.php';
    $book = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>

    <h1>Daftar Buku</h1>

    <a href="tambah.php">Tanbah data Buku</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tanggal Terbit</th>
            <th>Penerbit</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($book as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('yakin?')">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"] ?>" alt="" width="50"></td>
            <td><?= $row["judulBuku"] ?></td>
            <td><?= $row["pengarang"] ?></td>
            <td><?= $row["tanggalTerbit"] ?></td>
            <td><?= $row["penerbit"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
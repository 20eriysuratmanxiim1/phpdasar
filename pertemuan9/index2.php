<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    
    // ambil data dari tabel buku / query data buku
    $result = mysqli_query($conn, "SELECT * FROM buku");

    // ambil data (fetch) dari objek result
    // mysqli_fetch_row() // mengembalikan array numerik
    // mysqli_fetch_assoc() // mengembalikan array associative
    // mysqli_fetch_array() // mengembalikan keduanya
    // mysqli_fetch_object() // mengembalikan keduanya

    // while ($bk = mysqli_fetch_assoc($result)) {
    //     var_dump($bk);
    // }
    
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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"] ?>" alt="" width="50"></td>
            <td><?= $row["judulBuku"] ?></td>
            <td><?= $row["pengarang"] ?></td>
            <td><?= $row["tanggalTerbit"] ?></td>
            <td><?= $row["penerbit"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
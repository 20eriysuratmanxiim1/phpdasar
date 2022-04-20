<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }
    // cek tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {
        // ambil data dari form
        $judulBuku = $_POST["judulBuku"];
        $pengarang = $_POST["pengarang"];
        $tanggalTerbit = $_POST["tanggalTerbit"];
        $penerbit = $_POST["penerbit"];
        $gambar = $_POST["gambar"];

        // quwery insert data
        $query = "INSERT INTO buku VALUES ('', '$judulBuku', '$pengarang', '$tanggalTerbit', '$penerbit', '$gambar')";
        mysqli_query($conn, $query);
        
    }

    // cek apakah data berhasil ditambah atau tidak
    if(mysqli_affected_rows($conn) > 0) {
        echo 'Berhasil';
    }else{
        echo 'Gagal';
        echo '<br>';
        echo mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="judulBuku">Judul Buku : </label>
                <input type="text" name="judulBuku" id="judulBuku">
            </li>
            <li>
                <label for="pengarang">Pengarang : </label>
                <input type="text" name="pengarang" id="pengarang">
            </li>
            <li>
                <label for="tanggalTerbit">Tanggal Terbit : </label>
                <input type="text" name="tanggalTerbit" id="tanggalTerbit">
            </li>
            <li>
                <label for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
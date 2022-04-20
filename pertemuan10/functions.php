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

    function tambah($data){
        global $conn;
        $judulBuku = htmlspecialchars($data["judulBuku"]) ;
        $pengarang = htmlspecialchars($data["pengarang"]);
        $tanggalTerbit = htmlspecialchars($data["tanggalTerbit"]);
        $penerbit = htmlspecialchars($data["penerbit"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // quwery insert data
        $query = "INSERT INTO buku VALUES ('', '$judulBuku', '$pengarang', '$tanggalTerbit', '$penerbit', '$gambar')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>


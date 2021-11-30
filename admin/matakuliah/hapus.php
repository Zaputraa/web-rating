<?php
//koneksi database
include "../../koneksi.php";


if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM matkul WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header("location:index.php?pesan=data berhasil dihapus");
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
<?php
//koneksi database
include "../../koneksi.php";

// //menangkap data id yang di kirim dari url
// $id = $_POST['id'];

// $sql = "DELETE FROM user WHERE id='$id'";

// //menghapus data dari database
// // mysqli_query($koneksi, "delete from user where id='$id'");
// if(mysqli_query($koneksi, $sql)){
//     header("location:../index.php?pesan=data berhasil dihapus");
// }else{
//     echo "Error deleting record: " . mysqli_error($koneksi);
// }
// //mengalihkan halaman kembali ke index.php
// header("location:index.php");


if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM user WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header("location:../index.php?pesan=data berhasil dihapus");
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
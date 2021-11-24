<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];

// menginput data ke database
$query = mysqli_query($koneksi,"insert into asdos values('','$nama')");

// mengalihkan halaman kembali ke index.php
if($query){
    header("location:index.php?pesan=data berhasil ditambahkan");
} else {
    die("gagal menambahkan data");
}
?>
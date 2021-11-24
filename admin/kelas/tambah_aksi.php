<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$kelas = $_POST['kelas'];

// menginput data ke database
$query=mysqli_query($koneksi,"insert into kelas values('','$kelas')");

// mengalihkan halaman kembali ke index.php
if($query){
    header("location:index.php?pesan=data berhasil ditambahkan");
} else {
    die("gagal menambahkan data");
}
?>
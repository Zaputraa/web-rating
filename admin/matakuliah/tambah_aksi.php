<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$thnakademik = $_POST['thnakademik'];
$smstr = $_POST['smstr'];
$kode_mk = $_POST['kode_mk'];
$matkul = $_POST['matkul'];
$kelas = $_POST['kelas'];
$dosen = $_POST['dosen'];
$instruktur = $_POST['instruktur'];
$asdos = $_POST['asdos'];

// menginput data ke database
$query=mysqli_query($koneksi,"insert into matkul values('','$thnakademik','$smstr','$kode_mk','$matkul','$kelas','$dosen','$instruktur','$asdos')");

// mengalihkan halaman kembali ke index.php
if($query){
    header("location:index.php?pesan=data berhasil ditambahkan");
} else {
    die("gagal menambahkan data");
}
?>
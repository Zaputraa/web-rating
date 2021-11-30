<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$thnakademik = $_POST['thnakademik'];
$smstr = $_POST['smstr'];
// $kode_mk = $_POST['kode_mk'];
$matkul = $_POST['matkul'];
$kelas = $_POST['kelas'];
$dosen = $_POST['dosen'];
$instruktur = $_POST['instruktur'];
$asdos = $_POST['asdos'];

$ambil = mysqli_query($koneksi, "select kode_mk from daftar_mk where matkul='$matkul'");
$result = mysqli_fetch_array($ambil);
$kode_mk = $result['kode_mk'];

// menginput data ke database
$query=mysqli_query($koneksi,"insert into matkul values('','$thnakademik','$smstr','$kode_mk','$matkul','$kelas','$dosen','$instruktur','$asdos')");

// mengalihkan halaman kembali ke index.php
if($query){
    header("location:index.php?pesan=data berhasil ditambahkan");
} else {
    die("gagal menambahkan data");
}
?>
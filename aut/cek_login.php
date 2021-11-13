<?php 
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan koneksi database
include '../koneksi.php';

//mengambil data yang dikirim dari form login
$username = $_POST['tb_user'];
$password = $_POST['tb_pass'];

//menyeleksi data user dengan username dan password yang sesuai
$loginadmin = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password' and level='Admin'");
//menghitung jumlah data yang ditemukan
$cekadmin = mysqli_num_rows($loginadmin);
//menyeleksi data user dengan username dan password yang sesuai
$logindosen = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password' and level='Dosen'");
//menghitung jumlah data yang ditemukan
$cekdosen = mysqli_num_rows($logindosen);
//menyeleksi data user dengan username dan password yang sesuai
$loginmahasiswa = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password' and level='Mahasiswa'");
//menghitung jumlah data yang ditemukan
$cekmahasiswa = mysqli_num_rows($loginmahasiswa);

//cek apakah username dan password di temukan pada database
if ($cekadmin > 0){

    //buat session login dan username
    $_SESSION['username']= $username;
    $_SESSION['level'] = "Admin";

    //alihkan kehalaman dashboard admin
    header('Location:../admin/index.php');
    
}
else if ($cekdosen > 0){

    //buat session login dan username
    $_SESSION['username']= $username;
    $_SESSION['level'] = "Dosen";

    //alihkan kehalaman dashboard dosen
    header('Location:../dosen/index.php');
}
else if ($cekmahasiswa > 0){

    //buat session login dan username
    $_SESSION['username']= $username;
    $_SESSION['level'] = "Mahasiswa";

    //alihkan kehalaman dashboard mahasiswa
    header('Location:../mahasiswa/index.php');
}

?>
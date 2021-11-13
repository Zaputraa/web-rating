<?php
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan koneksi database
include '../koneksi.php';

//menangkap data yang dikirimkan dari form login
$username = $_POST['tb_user'];
$password = $_POST['tb_pass'];
//menyelesaikan data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada database
if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['level']=="Admin"){

        //buat session login dan username
        $_SESSION['tb_user'] = $username;
        $_SESSION['level'] = "Admin";
        //alihkan ke halaman dashboard admin
        header("location:admin/index.php");

    //cek jika user login sebagai dosen
    }else if($data['level']=="Dosen"){

        //buat session login dan username
        $_SESSION['tb_user'] = $username;
        $_SESSION['level'] = "Dosen";
        //alihkan ke halaman dashboard dosen
        header("location:dosen/index.php");

    //cek jika user login sebagai mahasiswa    
    }else if($data['level']=="Mahasiswa"){

        //buat session login dan username
        $_SESSION['tb_user'] = $username;
        $_SESSION['level'] = "Mahasiswa";
        //alihkan ke halaman dashboard mahasiswa
        header("location:mahasiswa/index.php");
        
    }else{
        //alihkan ke halaman login kembali
        header("location:../index.php?pesan=gagal cek");
    }
}else{
    header("location:../index.php?pesan=`$login`");
}

?>
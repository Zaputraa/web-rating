<?php 
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan koneksi database
include '../../koneksi.php';

//mengambil data yang dikirim dari form index
$matkul = $_GET['matkul'];
$dosen = $_GET['dosen'];
$instruktur = $_GET['instruktur'];
$asdos = $_GET['asdos'];

//menyeleksi data user dengan variable yang sesuai
$query_mk = mysqli_query($koneksi, "SELECT * from rating where matkul='$matkul'");
//menghitung jumlah data yang ditemukan
$data_mk = mysqli_num_rows($query_mk);
//menyeleksi data user dengan variable yang sesuai
$query_dosen = mysqli_query($koneksi, "SELECT * from rating where dosen='$dosen'");
//menghitung jumlah data yang ditemukan
$data_dosen = mysqli_num_rows($query_dosen);
//menyeleksi data user dengan variable yang sesuai
$query_instruktur = mysqli_query($koneksi, "SELECT * from rating where instruktur='$instruktur'");
//menghitung jumlah data yang ditemukan
$data_instruktur = mysqli_num_rows($query_instruktur);
$query_asdos = mysqli_query($koneksi, "SELECT * from rating where asdos='$asdos'");
//menghitung jumlah data yang ditemukan
$data_asdos = mysqli_num_rows($query_asdos);

//cek apakah username dan password di temukan pada database
if ($data_mk > 0){

    //buat session login dan username
    $_SESSION['matkul']= $matkul;

    //alihkan kehalaman dashboard admin
    header('Location:rate_mk.php');
    
}
else if ($data_dosen > 0){

    //buat session login dan username
    $_SESSION['dosen']= $dosen;

    //alihkan kehalaman dashboard dosen
    header('Location:rate_dosen.php');
}
else if ($data_instruktur > 0){

    //buat session login dan username
    $_SESSION['instruktur']= $instruktur;

    //alihkan kehalaman dashboard mahasiswa
    header('Location:rate_instruktur.php');
}
else if ($data_asdos > 0){

    //buat session login dan username
    $_SESSION['asdos']= $asdos;

    //alihkan kehalaman dashboard mahasiswa
    header('Location:rate_asdos.php');
}else{
    echo '<script language="javascript">
            alert ("Data ini masih kosong.");
                window.location="index.php";
            </script>';
            exit();

}
?>
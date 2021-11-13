<?php
$koneksi = mysqli_connect("localhost","root","","db_webrating");

//check connection
if(mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_errno();
}


$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'db_webrating'; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
        
?>
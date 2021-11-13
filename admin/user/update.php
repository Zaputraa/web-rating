<?php
include "../../koneksi.php";

$id = $_POST['id'];
$nik_nim = $_POST['nik_nim'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];



// mysqli_query($koneksi, "UPDATE user SET nik_nim='$nik_nim', username='$username', password='$password' WHERE id='$id'");

// header("location:list_admin.php?pesan=update");


$sql = "UPDATE user SET nik_nim='$nik_nim', nama='$nama', username='$username', password='$password' WHERE id='$id'";



if (mysqli_query($koneksi, $sql)) {
    header("location:../index.php?pesan=update");
} else {
  echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($conn);
?>
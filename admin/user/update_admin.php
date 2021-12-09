<?php
include "../../koneksi.php";

$id = $_POST['id'];
$nik_nim = $_POST['nik_nim'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE user SET nik_nim='$nik_nim', nama='$nama', username='$username', password='$password' WHERE id='$id'";



if (mysqli_query($koneksi, $sql)) {
    header("location:list_admin.php?pesan=update");
} else {
  echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($conn);
?>
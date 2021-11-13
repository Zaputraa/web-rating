<?php
include "../../koneksi.php";

$id = $_POST['id'];
$nik_nim = $_POST['nik_nim'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query("UPDATE user SET nik_nim='$nik_nim', username='$username', password='$password' WHERE id='$id'");

header("location:list_admin.php?pesan=update");
?>
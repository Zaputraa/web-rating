<?php
include "../../koneksi.php";

$id = $_POST['id'];
$kelas = $_POST['kelas'];

$sql = "UPDATE kelas SET kelas='$kelas' WHERE id='$id'";



if (mysqli_query($koneksi, $sql)) {
    header("location:index.php?pesan=update");
} else {
  echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($conn);
?>
<?php
include "../../koneksi.php";

$id = $_POST['id'];
$thn = $_POST['thnakademik'];

$sql = "UPDATE tahunakademik SET thn='$thn' WHERE id='$id'";



if (mysqli_query($koneksi, $sql)) {
    header("location:index.php?pesan=update");
} else {
  echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($conn);
?>
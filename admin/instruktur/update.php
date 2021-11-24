<?php
include "../../koneksi.php";

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE instruktur SET name='$name' WHERE id='$id'";



if (mysqli_query($koneksi, $sql)) {
    header("location:index.php?pesan=update");
} else {
  echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($conn);
?>
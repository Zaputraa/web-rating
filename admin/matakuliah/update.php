<?php
include "../../koneksi.php";

$id = $_POST['id'];
$thnakademik = $_POST['thnakademik'];
$smstr = $_POST['smstr'];
$kodemk = $_POST['kodemk'];
$matkul = $_POST['matkul'];
$kelas = $_POST['kelas'];
$dosen = $_POST['dosen'];
$instruktur = $_POST['instruktur'];
$asdos = $_POST['asdos'];

$sql = "UPDATE matkul SET tahunakademik='$thnakademik', smstr='$smstr', kodemk='$kodemk', matkul='$matkul', kelas='$kelas', dosen='$dosen', instruktur='$instruktur', asdos='$asdos' WHERE id='$id'";



if (mysqli_query($koneksi, $sql)) {
    header("location:index.php?pesan=update");
} else {
  echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($conn);
?>
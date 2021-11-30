<?php
include "../koneksi.php";

$thnakademik = $_POST['thnakademik'];
$tgl = $_POST['tgl'];
$smstr = $_POST['smstr'];
$matkul = $_POST['matkul'];
$kelas = $_POST['kelas'];
$dosen = $_POST['dosen'];
$instruktur = $_POST['instruktur'];
$asdos = $_POST['asdos'];
$rate = $_POST['rate'];
$saran = $_POST['saran'];

if($rate == "" || $saran == ""){
    echo '<script language="javascript">
    alert("Data harus lengkap");
    window.location="halaman_mahasiswa.php";
    </script>';
    exit();
}else{
    // $query="INSERT INTO rating values('','$thnakademik','$smstr','$kode_mk','$tgl','$matkul','$kelas','$dosen','$instruktur','$asdos','$rate','$saran')";
    $query = mysqli_query($koneksi,"insert into rating values('','$thnakademik','$smstr','$tgl','$matkul','$kelas','$dosen','$instruktur','$asdos','$rate','$saran')");

	// mysqli_query($koneksi, $query);
    if($query){    
    echo '<script language="javascript">
            alert ("Nilai Berhasil Ditambahkan, Terimakasih Sudah Berkontribusi Dalam Mengikuti Penilaian");
                window.location="index.php";
            </script>';
            exit();	
    }else{
        die("gagal menambahkan data");
    }
}

?>
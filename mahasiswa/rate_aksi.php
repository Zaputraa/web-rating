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
$rate_mk = $_POST['rate_mk'];
$saran_mk = $_POST['saran_mk'];
$rate_instruktur = $_POST['rate_instruktur'];
$saran_instruktur = $_POST['saran_instruktur'];
$rate_asdos = $_POST['rate_asdos'];
$saran_asdos = $_POST['saran_asdos'];


if($rate_mk == "" || $saran_mk == ""){
    echo '<script language="javascript">
    alert("Data harus lengkap (rate mk/saran mk belum diisi)");
    window.location="rate.php";
    </script>';
    exit();
}else if($rate_instruktur == "" || $saran_instruktur == ""){
    echo '<script language="javascript">
    alert("Data harus lengkap (rate instruktur/saran instruktur belum diisi)");
    window.location="rate.php";
    </script>';
    exit();
}else if($rate_asdos == "" || $saran_asdos == ""){
    echo '<script language="javascript">
    alert("Data harus lengkap (rate asdos/saran asdos belum diisi)");
    window.location="rate.php";
    </script>';
}else{
    // $query="INSERT INTO rating values('','$thnakademik','$smstr','$kode_mk','$tgl','$matkul','$kelas','$dosen','$instruktur','$asdos','$rate','$saran')";
    $query = mysqli_query($koneksi,"insert into rating values('','$thnakademik','$smstr','$tgl','$matkul','$kelas','$dosen','$instruktur','$asdos','$rate_mk','$saran_mk','$rate_instruktur','$saran_instruktur','$rate_asdos','$saran_asdos')");

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
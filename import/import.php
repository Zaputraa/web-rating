<?php

//loud file koneksi
include "../koneksi.php";

if(isset($_POST['import'])){ //jika user mengklik tombol import
    $nama_file_baru = 'data.xlsx';

    //load librari PHPexcel nya
    require_once 'PHPExcel/PHPExcel.php';

    $excelreader = new PHPExcel_Reader_Excel2007();
    $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); //load file excel tadi diupload ke folder tmp
    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

    $numrow = 1;
    foreach($sheet as $row){
        //ambil data pada excel sesuai kolom
        $nis = $row['A'];
        $nama = $row['B'];
        $jenis_kelamin = $row['C'];
        $telp = $row['D'];
        $alamat = $row['E'];

        //cek jika semua data tidak diisi
        if($nis == "" && $nama == "" && $jenis_kelamin == "" && $telp == "" && $alamat == "")
        continue; //lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

        //cek $numrow apakah lebih dari 1
        //artinya karena baris pertama adalah nama-nama kolom
        //jadi dilewat saja, tidak usah diimport
        if($numrow > 1){
            //proses simpan ke database
            //buat query insert
            $sql = $pdo->prepare("insert into user values(:nik_nim,:nama,:username,:pass,:level)");
            $sql->bindParam(':nik_nim', $nis);
            $sql->bindParam(':nama', $nama);
            $sql->bindParam(':username', $jenis_kelamin);
            $sql->bindParam(':pass', $telp);
            $sql->bindParam(':level', $alamat);
            $sql->execute();
        }

        $numrow++;
    }

}

header('location: index.php');
?>
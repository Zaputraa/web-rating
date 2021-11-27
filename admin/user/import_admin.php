<?php

//loud file koneksi
include "../../koneksi.php";

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
        $nik = $row['A'];
        $nama = $row['B'];
        $username = $row['C'];
        $pass = $row['D'];
        $role = $row['E'];

        //cek jika semua data tidak diisi
        // if($nik == "" && $nama == "" && $username == "" && $pass == "" && $role == "")
        // continue; //lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

        //cek $numrow apakah lebih dari 1
        //artinya karena baris pertama adalah nama-nama kolom
        //jadi dilewat saja, tidak usah diimport
        if($numrow > 1){
            mysqli_query($koneksi,"INSERT into user values('','$nik','$username','$nama', '$pass','$role')");
        }

        $numrow++;
    }

}

header("location:list_admin.php?pesan=data berhasil ditambahkan");
?>
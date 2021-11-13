<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content ="width=device-width, initial-scale=1">
        <title>Import Data dengan PHP</title>

        <!-- load file bootstrap.min.css yang ada di folder css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- style intuk loading -->
        <style>
            #loading{
                background: whitesmoke;
                position: absolute;
                top: 140px;
                left: 82px;
                padding: 5px 10px;
                border: 1px solid #ccc;
            }
        </style>
    </head>

    <body>
        
        <!-- membuat menu header/ navbar -->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color: white;"><b>Import Data dengan PHP</b></a>
                </div>
            </div>
        </nav>

        <!-- content -->
        <div style="padding: 0 15px">
            <!-- Buat sebuah tombol untuk mengarahkan ke form import data
            tambahkan class btn agar terlihat seperti tombol
            tambahkan class btn-success untuk tombol warna hijau
            class pull-right agar posisi link berada di sebelah kanan -->

            <a href="form.php" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-upload"></span> Import Data
            </a>

            <h3>Data Hasil Import</h3>

            <hr>

            <!-- buat sebuah div dan beri class table-responsive agar tabel jadi responsive -->
            <div class="table table-bordered">
                <table>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                    </tr>

                    <?php
                    
                    //load file koneksi.php
                    include "../koneksi.php";

                    //buat query untuk menampilkan semua data siswa
                    $sql = $pdo->prepare("select * from siswa");
                    $sql->execute(); //eksekusi querynya

                    $no = 1; //untuk tabel, di awal set dengan 1
                    while($data = $sql->fetch()){ //Ambil semua data dari hasil eksekusi $sql
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$data['nis']."</td>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['jenis_kelamin']."</td>";
                        echo "<td>".$data['telp']."</td>";
                        echo "<td>".$data['alamat']."</td>";
                        echo "</tr>";

                        $no++; //tambah 1 setiap kali looping
                    }
                    ?>
                </table>                
            </div>
        </div>
    </body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title>WEB RATING (Admin)</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../../asset/css/sidebar.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet" crossorigin="anonymous">
</head>

<?php
session_start();

if($_SESSION['username'] == null){

    header('Location:../../index.php');
}
?>
<body>
    <!-- sidebar header -->
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>

        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="../index.php">Web Rating</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="../../asset/images/logo1.png" alt="User Picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <?php
                            include "../../get_profile.php";
                            ?>
                        </span>
                        <span class="user-role">Admin</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>

                <!-- sidebar menu -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-graduation-cap"></i>
                                <span>Data Perkuliahan</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                <li>
                                        <a href="../mk_pilih/index.php">Transaksi Matakuliah</a>
                                    </li>
                                    <li>
                                        <a href="../matakuliah/index.php">Matakuliah</a>
                                    </li>
                                    <li>
                                        <a href="../rate/index.php">Rating</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=sidebar-dropdown>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Data User</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="list_admin.php">Data Admin</a>
                                    </li>
                                    <li>
                                        <a href="list_dosen.php">Data Dosen</a>
                                    </li>
                                    <li>
                                        <a href="list_mhs.php">Data Mahasiswa</a>
                                    </li>
                                    <li>
                                        <a href="list_role.php">Data Role</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fas fa-database"></i>
                                    <span>Data Master</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a href="../Dosen/index.php">Dosen</a>
                                        </li>
                                        <li>
                                            <a href="../instruktur/index.php">Instruktur</a>
                                        </li>
                                        <li>
                                            <a href="../asisten/index.php">Asisten Dosen</a>
                                        </li>
                                        <li>
                                            <a href="../kode_mk.php">Matakuliah</a>
                                        </li>
                                        <li>
                                            <a href="../kelas/index.php">Kelas</a>
                                        </li>
                                        <li>
                                            <a href="../thnakademik/index.php">Tahun Akademik</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span>Grafik Rating</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../grafik/dosen.php">Grafik Dosen</a>
                                    </li>
                                    <li>
                                        <a href="../grafik/instruktur.php">Grafik Instruktur</a>
                                    </li>
                                    <li>
                                        <a href="../grafik/asdos.php">Grafik Asisten</a>
                                    </li>
                                    <li>
                                        <a href="../grafik/matkul.php">Grafik Matakuliah</a>
                                    </li>
                                    <li>
                                        <a href="../grafik/matkul_dosen.php">Grafik Matakuliah/Dosen</a>
                                    </li>
                                </ul>
                            </div>
                        </li>                        
                    </ul>
                </div>
            </div>

            <!-- Sidebar content -->
            <div class="sidebar-footer">              
                <a href="../../aut/logout.php">
                    <i class="fa fa-power-off"></i>                    
                </a>
            </div>
        </nav>

        <!-- Sidebar Wrapper -->
        <main class="page-content">
            <div class="container-fluid">
                <h3>Data Dosen</h3>

                <hr>

                <div class="table table-striped">
                    <table style="width:100%">
                        <tr>
                            <th>NO</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Opsi</th>
                        </tr>

                        <?php
                        
                        //load file koneksi
                        include "../../koneksi.php";

                        //buat query untuk menampilkan semua data user
                        $sql = $pdo->prepare("select * from user where level='Dosen'");
                        $sql->execute(); //eksekusi query

                        $no = 1; //untuk tabel awal di set dengan 1
                        while($data = $sql->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td>0<?php echo $data['nik_nim']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['password']; ?></td>
                                <td><?php echo $data['level']; ?></td>
                                <td>
                                    <a type="button" class="btn btn-dark" href="aksi_edit_dosen.php?id=<?php echo $data['id']; ?>">Edit</a>
                                    <a type="button" class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>" onClick="return confirm('ingin menghapus data?')">Hapus</a>
                                </td> 

                            </tr>                                                      
                            <?php } ?>
                    </table>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" class="pull-left">

                    <button type="submit" name="preview" class="btn btn-success btn-sm">
                        <span class="glyphicon clyphigon-eye-open"></span> Preview
                    </button>
                </form>

                <!-- Buat Preview Data -->
                <?php
                //jika user telah mengklik tombol preview
                if(isset($_POST['preview'])){
                    $nama_file_baru = 'data.xlsx';

                    //cek apakah terdapat file data.xlsx pada folder tmp
                    if(is_file('tmp/'.$nama_file_baru)) //jika file tersebut ada
                        unlink('tmp/'.$nama_file_baru);

                    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                    $tmp_file = $_FILES['file']['tmp_name'];

                    //cek apakah file yang diupload adalah file excel 2007 (xlsx)
                    if($ext == "xlsx"){
                        //upload file yang dipilih ke folder tmp
                        move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

                        //load librari PHPExcel
                        require_once 'PHPExcel/PHPExcel.php';

                        $excelreader = new PHPExcel_Reader_Excel2007();
                        $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); //load file yang tadi di upload ke folder tmp
                        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);
                        $numrow = 1;
                        $kosong = 0;

                        //buat sebuah tag form untuk sebuah proses import data ke database
                        echo "<form method='post' action='import_dosen.php'>";


                        echo "<table class='table table-bordered'>
                        <tr>
                            <th colspan='5' class='text-center'>Preview Data</th>
                        </tr>
                        <tr>                        
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                        </tr>";

                        foreach($sheet as $row){ //lakukan pengulangan dari data yang ada di excel
                            //ambil data pada excel sesuai kolom
                            $nik = $row['A'];
                            $nama = $row['B'];
                            $username = $row['C'];
                            $password = $row['D'];
                            $role = $row['E']; 
                            
                            //cek jika semua data tidak diisi
                            if($nik == "" && $nama == "" && $username == "" && $password == "" && $role == "")
                                continue;

                            //cek $numrow apakah lebih dari 1
                            //artinya karena baris pertama adalah nama nama kolom
                            //jadi dilewat saja, tidak usah diimport
                            if($numrow > 1){
                                //validasi apakah semua data telah diisi
                                $nik_td = ( ! empty($nik))? "" : "style='background: #E07171;'";
                                $nama_td = ( ! empty($nama))? "" : "style='background: #E07171;'";
                                $user_td = ( ! empty($username))? "" : "style='background: #E07171;'";
                                $pass_td = ( ! empty($password))? "" : "style='background: #E07171;'";
                                $role_td = ( ! empty($role))? "" : "style='background: #E07171;'";

                                //jika salah satu data ada yang kosong
                                if($nik == "" or $username == "" or $password == "" or $role == ""){
                                    $kosong++;
                                }

                                echo "<tr>";
                                echo "<td".$nik_td.">".$nik."</td>";
                                echo "<td".$nama_td.">".$nama."</td>";
                                echo "<td".$user_td.">".$username."</td>";
                                echo "<td".$pass_td.">".$password."</td>";
                                echo "<td".$role_td.">".$role."</td>";                                
                                echo "</tr>";
                            }

                            $numrow++;

                        }

                        echo "</table>";

                        //cek apakah variabel kosong lebih dari 0
                        //jika lebih dari 0, maka ada data yang masih kosong
                        if($kosong > 0){
                            echo "<div class='alert alert-danger' id='kosong'> Semua data belum diisi, Ada $kosong  data yang belum diisi. </div>";
                        }else{ // Jika semua data sudah diisi
                            echo "<hr>";
                            
                            // Buat sebuah tombol untuk mengimport data ke database
                            echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
                        }
                        
                        echo "</form>";
                        }else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)
                        // Munculkan pesan validasi
                        echo "<div class='alert alert-danger'>
                        Hanya File Excel 2007 (.xlsx) yang diperbolehkan
                        </div>";
                        }
                    }
                ?>
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../asset/js/sidebar.js"></script>

</body>

</html>
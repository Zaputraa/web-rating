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
                                        <a href="index.php">Transaksi Matakuliah</a>
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
                                        <a href="../user/list_admin.php">Data Admin</a>
                                    </li>
                                    <li>
                                        <a href="../user/list_dosen.php">Data Dosen</a>
                                    </li>
                                    <li>
                                        <a href="../user/list_mhs.php">Data Mahasiswa</a>
                                    </li>
                                    <li>
                                        <a href="../user/list_role.php">Data Role</a>
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
                <h3>Data Transaksi Matakuliah</h3>

                <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-filter"></i>
                </button>

                <div class="collapse" id="collapseExample">
                    <form action="index.php" method="get">
                        <label>Semester :</label>
                        <select class="drpdwn" name="cari">
                            <option disabled selcted> Pilih </option>
                            <?php
                            include "../../koneksi.php";

                            $sql = "select * from semester order by smstr";

                            $hasil = mysqli_query($koneksi, $sql);
                            $no=0;
                            while($data = mysqli_fetch_array($hasil)){
                                $no++;
                                ?>
                                <option value="<?php echo $data['smstr']; ?>"><?php echo $data['smstr'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label>Tahun Akademik :</label>

                        <select name="thn" class="drpdwn">
                            <option disabled selected>Pilih</option>
                            <?php
                            $sql = "select * from tahunakademik order by thn";

                            $hasil = mysqli_query($koneksi,$sql);
                            $no=0;
                            while($data = mysqli_fetch_array($hasil)){
                                $no++;
                                ?>

                                <option value="<?php echo $data['thn']?>"><?php echo $data['thn']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        
                        <button class="cari btn btn-secondary" type="submit">Cari</button>
                    </form>

                    
                </div>

                <br>

                <?php
                if(isset($_GET['cari']) AND isset($_GET['thn'])){
                    $cari = $_GET['cari'];
                    $thn = $_GET['thn'];
                    echo "<b>Hasil pencarian : ".$cari." dan ".$thn,"</b>";
                }
                ?>

                <hr>

                <div class="table table-striped">
                    <table style="width:100%">
                        <tr>
                            <th>Tahun Akademik</th>                            
                            <th>Semester</th>                            
                            <th>Kode MK</th>                            
                            <th>Matakuliah</th>                            
                            <th>Kelas</th>                            
                            <th>Dosen</th>                            
                            <th>Instruktur</th>                            
                            <th>Asisten</th>                            
                            <th>Nama</th>                            
                            <th>Nim</th>                            
                            <th>Opsi</th>                            
                        </tr>

                        <?php
                        
                        //load file koneksi
                        include "../../koneksi.php";

                        //buat query untuk menampilkan semua data user
                        $sql = $pdo->prepare("select * from mk_pilh");
                        $sql->execute(); //eksekusi query

                        $no = 1; //untuk tabel awal di set dengan 1
                        while($data = $sql->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $data['tahunakademik']; ?></td>
                                <td><?php echo $data['smstr']; ?></td>
                                <td><?php echo $data['kodemk']; ?></td>
                                <td><?php echo $data['matkul']; ?></td>
                                <td><?php echo $data['kelas']; ?></td>
                                <td><?php echo $data['dosen']; ?></td>
                                <td><?php echo $data['instruktur']; ?></td>
                                <td><?php echo $data['asdos']; ?></td>
                                <td><?php echo $data['mhs']; ?></td>
                                <td><?php echo $data['nim']; ?></td>
                                <td>
                                    <a type="button" class="btn btn-dark" href="aksi_edit.php?id=<?php echo $data['id']; ?>">Edit</a>
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
                
                <hr>

                <!-- Buat Preview Data -->
                <?php
                // Jika user telah mengklik tombol Preview
                if(isset($_POST['preview'])){
                    $nama_file_baru = 'data.xlsx';
                    
                    // Cek apakah terdapat file data.xlsx pada folder tmp
                    if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
                    unlink('tmp/'.$nama_file_baru); // Hapus file tersebut
                    
                    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
                    $tmp_file = $_FILES['file']['tmp_name'];

                    // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
                    if($ext == "xlsx"){
                    // Upload file yang dipilih ke folder tmp
                    move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);
                    
                    // Load librari PHPExcel nya
                    require_once 'PHPExcel/PHPExcel.php';
                    
                    $excelreader = new PHPExcel_Reader_Excel2007();
                    $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
                    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
                    $numrow = 1;
                    $kosong = 0;
                    // Buat sebuah tag form untuk proses import data ke database
                    echo "<form method='post' action='import_mk.php'>";
                
                    // Buat sebuah div untuk alert validasi kosong
                   
                    
                    echo "<table class='table table-bordered'>
                    <tr>
                        <th colspan='5' class='text-center'>Preview Data</th>
                    </tr>
                    <tr>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
                        <th>Kode MK</th>
                        <th>Matakuliah</th>
                        <th>Kelas</th>
                        <th>Dosen</th>
                        <th>Instruktur</th>
                        <th>Asisten Dosen</th>
                        <th>Mahasiswa</th>
                        <th>NIM</th>
                    </tr>";
                   
                    foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
                        // Ambil data pada excel sesuai Kolom
                        $thnakademik = $row['A']; // Ambil data Tahun Akademik
                        $smstr = $row['B']; // Ambil data Semester
                        $kodemk = $row['C']; // Ambil data Kode MK
                        $mk = $row['D']; // Ambil data Matakuliah
                        $kelas = $row['E']; // Ambil data Kelas
                        $dosen = $row['F']; // Ambil data Dosen
                        $instruktur = $row['G']; // Ambil data Instruktur
                        $asdos = $row['H']; // Ambil data jenis Asisten
                        $mhs = $row['I']; // Ambil data Mahasiswa
                        $nim = $row['J']; // Ambil data NIM
                        
                        // Cek jika semua data tidak diisi
                        if($thnakademik == "" && $smstr == "" && $kodemk == "" && $mk == "" && $kelas == "" && $dosen == "" && $instruktur == "" && $asdos == "" && $mhs == "" && $nim == "")
                        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
                        
                        // Cek $numrow apakah lebih dari 1
                        // Artinya karena baris pertama adalah nama-nama kolom
                        // Jadi dilewat saja, tidak usah diimport
                        if($numrow > 1){
                        // Validasi apakah semua data telah diisi
                        $thn_td = ( ! empty($thnakademik))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                        $smstr_td = ( ! empty($smstr))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                        $kodemk_td = ( ! empty($kodemk))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                        $mk_td = ( ! empty($mk))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah
                        $kelas_td = ( ! empty($kelas))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                        $dosen_td = ( ! empty($dosen))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                        $ins_td = ( ! empty($instruktur))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                        $asdos_td = ( ! empty($asdos))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                        $mhs_td = ( ! empty($mhs))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah
                        $nim_td = ( ! empty($nim))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                        
                        // Jika salah satu data ada yang kosong
                        if($thnakademik == "" or $smstr == "" or $kodemk == "" or $mk == "" or $kelas == "" or $dosen == "" or $instruktur == "" or $asdos == "" or $mhs == "" or $nim == ""){
                            $kosong++; // Tambah 1 variabel $kosong
                        }
                        
                        echo "<tr>";
                        echo "<td".$thn_td.">".$thnakademik."</td>";
                        echo "<td".$smstr_td.">".$smstr."</td>";
                        echo "<td".$kodemk_td.">".$kodemk."</td>";
                        echo "<td".$mk_td.">".$mk."</td>";
                        echo "<td".$kelas_td.">".$kelas."</td>";
                        echo "<td".$dosen_td.">".$dosen."</td>";
                        echo "<td".$ins_td.">".$instruktur."</td>";
                        echo "<td".$asdos_td.">".$asdos."</td>";
                        echo "<td".$mhs_td.">".$mhs."</td>";
                        echo "<td".$nim_td.">".$nim."</td>";
                        echo "</tr>";
                        }
                        
                        $numrow++; // Tambah 1 setiap kali looping
                    }
                    
                    echo "</table>";
                   
                    // Cek apakah variabel kosong lebih dari 0
                    // Jika lebih dari 0, berarti ada data yang masih kosong
                    if($kosong > 0){
                        echo "<div class='alert alert-danger' id='kosong'> Semua data belum diisi, Ada $kosong  data yang belum diisi. </div>";
                    }else{ // Jika semua data sudah diisi
                        echo "<hr>";
                        
                        // Buat sebuah tombol untuk mengimport data ke database
                        echo "<button onclick='jacascript:alert('data anda berhasil ditambahkan') type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
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
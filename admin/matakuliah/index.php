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
                                        <a href="index.php">Matakuliah</a>
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
                <h3>Data Matakuliah</h3>
                
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
                            <option disabled selected> Pilih </option>
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
                            <th>Opsi</th>                            
                        </tr>

                        <?php
                        
                        //load file koneksi
                        include "../../koneksi.php";

                        if(isset($_GET['cari']) AND isset($_GET['thn'])){
                            $cari = $_GET['cari'];
                            $thn = $_GET['thn'];
                            $data = mysqli_query($koneksi,"SELECT * FROM matkul WHERE smstr like '%$cari%' and tahunakademik like '%$thn%'");
                        }else{
                            $data = mysqli_query($koneksi,"select * from matkul order by tahunakademik");
                        }while($d = mysqli_fetch_array($data)){
                        ?>

                        <tr>
                        <td><?php echo $d['tahunakademik']; ?></td>
                        <td><?php echo $d['smstr']; ?></td>
                        <td><?php echo $d['kodemk']; ?></td>
                        <td><?php echo $d['matkul']; ?></td>
                        <td><?php echo $d['kelas']; ?></td>
                        <td><?php echo $d['dosen']; ?></td>
                        <td><?php echo $d['instruktur']; ?></td>
                        <td><?php echo $d['asdos']; ?></td>
                        <td>
                            <a type="button" class="btn btn-dark" href="aksi_edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                            <a type="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" onClick="return confirm('ingin menghapus data?')">Hapus</a>
                        </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div> 
                
                <form action="" method="post" enctype="multipart/form-data">
                    <a type="submit" class="btn btn-success" href="tambah.php">Tambah</a>
                </form>
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
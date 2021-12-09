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

        <?php
        include "../../koneksi.php"
        ?>

        <!-- Sidebar Wrapper -->
        <main class="page-content">
            <div class="container-fluid">
                <form action="tambah_aksi.php" method="post">
                    <table class="table-form">
                        <tr>
                            <td class="td-thnakademik">Tahun Akademik :</td>
                            <td>
                                <select name="thnakademik" class="drpdwn">
                                    <option disabled selected>Pilih</option>
                                    <?php
                                    //Membuat koneksi ke database akademik
                                    $kon = mysqli_connect("localhost",'root',"","db_webrating");
                                    if (!$kon){
                                    die("Koneksi database gagal:".mysqli_connect_error());
                                    }							
                                    $sql="select thn from tahunakademik GROUP by thn ORDER BY thn";

                                    $hasil=mysqli_query($kon,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $data['thn'];?>"><?php echo $data['thn'];?></option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-smstr">Semester :</td>
                            <td>
                                <select name="smstr" class="drpdwn">
                                    <option disabled selected>Pilih</option>
                                    <?php
                                    //Membuat koneksi ke database akademik
                                    $kon = mysqli_connect("localhost",'root',"","db_webrating");
                                    if (!$kon){
                                    die("Koneksi database gagal:".mysqli_connect_error());
                                    }							
                                    $sql="select smstr from semester GROUP by smstr ORDER BY smstr";

                                    $hasil=mysqli_query($kon,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $data['smstr'];?>"><?php echo $data['smstr'];?></option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-kode_mk">Kode MK :</td>
                            <td>
                                <select name="kode_mk" id="kodemk" class="drpdwn" onchange="myFunction(this.value)">
                                    <option disabled selected>Pilih</option>
                                    <?php
                                    //Membuat koneksi ke database akademik
                                    $kon = mysqli_connect("localhost",'root',"","db_webrating");
                                    if (!$kon){
                                    die("Koneksi database gagal:".mysqli_connect_error());
                                    }							
                                    // $sql="select kode_mk from daftar_mk GROUP by kode_mk ORDER BY kode_mk";
                                    $sql="select * from daftar_mk GROUP by kode_mk ORDER BY kode_mk";

                                    $hasil=mysqli_query($kon,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $data['matkul'];?>"><?php echo $data['kode_mk'];?></option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-matkul">Matakuliah :</td>
                            <td>
                                <!-- <input type="text" id="mk"> -->
                                <textarea name="matkul" type="text" id="mk" cols="30" rows="2"></textarea>
                                <script>
                                    function myFunction(){
                                        var tes = document.getElementById("kodemk").value;
                                            document.getElementById("mk").value = tes;
                                    }
                                </script>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-kelas">Kelas :</td>
                            <td>
                                <select name="kelas" class="drpdwn">
                                    <option disabled selected>Pilih</option>
                                    <?php
                                    //Membuat koneksi ke database akademik
                                    $kon = mysqli_connect("localhost",'root',"","db_webrating");
                                    if (!$kon){
                                    die("Koneksi database gagal:".mysqli_connect_error());
                                    }							
                                    $sql="select kelas from kelas GROUP by kelas ORDER BY kelas";

                                    $hasil=mysqli_query($kon,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $data['kelas'];?>"><?php echo $data['kelas'];?></option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-dosen">Dosen :</td>
                            <td>
                                <select name="dosen" class="drpdwn">
                                    <option disabled selected>Pilih</option>
                                    <?php
                                    //Membuat koneksi ke database akademik
                                    $kon = mysqli_connect("localhost",'root',"","db_webrating");
                                    if (!$kon){
                                    die("Koneksi database gagal:".mysqli_connect_error());
                                    }							
                                    $sql="select nama from user where level='Dosen' GROUP by nama ORDER BY nama";

                                    $hasil=mysqli_query($kon,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $data['nama'];?>"><?php echo $data['nama'];?></option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-instruktur">Instruktur :</td>
                            <td>
                                <select name="instruktur" class="drpdwn">
                                    <option disabled selected>Pilih</option>
                                    <?php
                                    //Membuat koneksi ke database akademik
                                    $kon = mysqli_connect("localhost",'root',"","db_webrating");
                                    if (!$kon){
                                    die("Koneksi database gagal:".mysqli_connect_error());
                                    }							
                                    $sql="select name from instruktur GROUP by name ORDER BY name";

                                    $hasil=mysqli_query($kon,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $data['name'];?>"><?php echo $data['name'];?></option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-asdos">Asisten Dosen :</td>
                            <td>
                                <select name="asdos" class="drpdwn">
                                    <option disabled selected>Pilih</option>
                                    <?php
                                    //Membuat koneksi ke database akademik
                                    $kon = mysqli_connect("localhost",'root',"","db_webrating");
                                    if (!$kon){
                                    die("Koneksi database gagal:".mysqli_connect_error());
                                    }							
                                    $sql="select nama from asdos GROUP by nama ORDER BY nama";

                                    $hasil=mysqli_query($kon,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $data['nama'];?>"><?php echo $data['nama'];?></option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button onclick='jacascript:alert("data anda berhasil ditambahkan")' href='#'>Simpan</button></td>
                        </tr>
                    </table>
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
    <!-- <script>
        function myFunction(val){
            alert("The input value has changed. The new value is: " + val);
        }
    </script> -->

</body>

</html>
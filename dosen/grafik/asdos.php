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
                        <span class="user-role">Mahasiswa</span>
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
                            <span>Grafik</span>
                        </li>
                        <li>
                            <a href="dosen.php">
                                <i class="fas fa-user"></i>
                                <span>Dosen</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="instruktur.php">
                                <i class="fas fa-user"></i>
                                <span>Instruktur</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="asdos.php">
                                <i class="fas fa-user"></i>
                                <span>Asisten</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="matkul.php">
                                <i class="fas fa-file"></i>
                                <span>Matakuliah</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="matkul_dosen.php">
                                <i class="fas fa-file"></i>
                                <span>Matakuliah/Dosen</span>
                            </a>
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

            <h3>Grafik Asisten Dosen</h3>

            <hr>

            <div class="table table-striped">
                    <table style="width:100%">
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>                            
                            <th>Opsi</th>                            
                        </tr>

                        <?php
                        
                        //load file koneksi
                        include "../../koneksi.php";

                        //buat query untuk menampilkan semua data user
                        $sql = $pdo->prepare("select * from asdos");
                        $sql->execute(); //eksekusi query

                        $no = 1; //untuk tabel awal di set dengan 1
                        while($data = $sql->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                    <a type="button" class="btn btn-outline-primary" href="chart_asdos.php?nama=<?php echo $data['nama']; ?>">Rate</a>
                                </td> 

                            </tr>                                                      
                            <?php } ?>
                    </table>
                </div>

            <!-- <a type="button" class="btn btn-dark" href="chart_dosen.php">Asep Setiawan</a> -->
            <!-- <button class="btn btn-success" onclick="openpopup()">Asep Setiawan</button> -->

        </div>
    </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../asset/js/sidebar.js"></script>
    <script>
        function myfunction(){
            window.open("http://localhost:8080/newsekripsi/admin/grafik/chart_dosen.php?id=<?php echo $data['id'];?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=800,height=800");
        }
    </script>

</body>

</html>
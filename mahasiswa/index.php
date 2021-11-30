d<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title>WEB RATING</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/css/sidebar.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet" crossorigin="anonymous">
</head>

<?php
session_start();

if($_SESSION['username'] == null){

    header('Location:../index.php');
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
                    <a href="index.php">Web Rating</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="../asset/images/logo1.png" alt="User Picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <?php
                            include "../get_profile.php";
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
                            <a href="#">
                                <i class="fas fa-user"></i>
                                <span>Dosen</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="#">
                                <i class="fas fa-user"></i>
                                <span>Instruktur</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="#">
                                <i class="fas fa-user"></i>
                                <span>Asisten</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="#">
                                <i class="fas fa-file"></i>
                                <span>Matakuliah</span>
                            </a>
                        </li>                        
                        <li>
                            <a href="#">
                                <i class="fas fa-file"></i>
                                <span>Matakuliah/Dosen</span>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </div>

            <!-- Sidebar content -->
            <div class="sidebar-footer">                              
                <a href="../aut/logout.php">
                    <i class="fa fa-power-off"></i>                    
                </a>                    
            </div>
        </nav>

        <!-- Sidebar Wrapper -->
    <main class="page-content">
        <div class="container-fluid">  
            <h3>Daftar Matakuliah</h3>

            <hr>

            <div class="table table-striped">
                <form action="rate.php" method="get">
                    <table style="width:100%">
                        <tr>
                            <th>Kode MK</th>
                            <th>Matakuliah</th>
                            <th>Kelas</th>
                            <th>Opsi</th>
                        </tr>

                        <?php

                        //load file koneksi
                        include "../koneksi.php";

                        //query untuk menampilkan semua data user
                        $sql = $pdo->prepare("select * from mk_pilh where mhs='$nama'");
                        $sql->execute(); //eksekusi query

                        while($data = $sql->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $data['kodemk']; ?></td>
                                <td><?php echo $data['matkul']; ?></td>
                                <td><?php echo $data['kelas']; ?></td>
                                <td>
                                    <a href="rate.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary">Rate</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

                </form>
                

            </div>

        </div>
    </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../asset/js/sidebar.js"></script>

</body>

</html>
<!DOCTYPE html>
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
                            echo $_SESSION['username'];
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

            <div class="container">
                <?php
                include "../koneksi.php";
                $id = $_GET['id'];
                $getdata = mysqli_query($koneksi, "select * from mk_pilh where id='$id'");
                while($d = mysqli_fetch_array($getdata)){
                    ?>
                    <form action="rate_aksi.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="td-input">Tanggal</td>
                                <td><input type="text" class="input" name="tgl" value="<?php echo date('d / m / y'); ?>"></td>
                                <td class="td-text">Rate</td>
                                <td>
                                    <select name="rate" class="dropdown">
                                        <option disabled selected>Pilih</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="td-input">Semester </td>
                                <td><input type="text" class="input" name="smstr" value="<?php echo $d['smstr']; ?>"></td>
                                <td class="td-text"> Saran </td>
                                <td><textarea name="saran" cols="50" rows="2" maxlength="500" required="required" type="text"></textarea></td>
                            </tr>
                            <tr>
                                <td class="td-input">Tahun Akademik </td>
                                <td><input type="text" class="input" name="thnakademik" value=<?php echo $d['tahunakademik']; ?>></td>
                                <td></td>
                                <td><input type="submit" class="simpan" value="SIMPAN"></td>
                            </tr>
                            <tr>
                                <td class="td-input">Matakuliah </td>
                                <td><input type="text" class="input" name="matkul" value="<?php echo $d['matkul']; ?>"></td>
                            </tr>
                            <tr>
                                <td class="td-input">Kelas </td>
                                <td><input type="text" class="input" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
                            </tr>
                            <tr>
                                <td class="td-input">Dosen </td>
                                <td><input type="text" class="input" name="dosen" value="<?php echo $d['dosen']; ?>"></td>
                            </tr>
                            <tr>
                                <td class="td-input">Instruktur </td>
                                <td><input type="text" class="input" name="instruktur" value="<?php echo $d['instruktur']; ?>"></td>
                            </tr>
                            <tr>
                                <td class="td-input">Asisten Dosen  </td>
                                <td><input type="text" class="input" name="asdos" value="<?php echo $d['asdos']; ?>"></td>
                            </tr>
                        </table>
                    </form>
                <?php }
                
                ?>

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
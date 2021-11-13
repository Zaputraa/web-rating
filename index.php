<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title>WEB RATING</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- icon -->
            <div class="fadeIn first">
                <img src="asset/images/logo1.png" alt="User Icon" id="icon" style="width:175px"/>
            </div>

            <!-- Login From -->
            <form action="./aut/cek_login.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="tb_user" placeholder="login">
                <input type="password" id="password" class="fadeIn third" name="tb_pass" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">

                <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                        echo "<div class='allert'>Username dan password tidak sesuai !</div>";
                    }
                }
                ?>
            </form>
        </div>
    </div> 
</body>



</html>
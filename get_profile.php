<?php
include "koneksi.php";

$username = $_SESSION['username'];

$query = "SELECT nama FROM user WHERE username = '".$username."'";
$result = mysqli_query($koneksi, $query);
if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_array($result);
    $nama = $row["nama"];
    echo $nama;
    // $_SESSION['profile']= $nama;

}
else
{
    echo "No record found";
}
?>
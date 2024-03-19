<?php
$servername = "192.168.0.100";
$database = "web_lanjut";
$username = "web";
$password = "@123WebLanjut";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Koneksi gagal: ". mysqli_connect_error());
}
// echo "Koneksi Berhasil";
// mysqli_close($conn);
?>
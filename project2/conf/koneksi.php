<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "admin_panel";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db){
    die("gagal terhubung database: " . mysqli_connect());
}
?>
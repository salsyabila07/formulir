<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "formulir";

$koneksi = mysqli_connect($server, $user, $password, $database);

if (!$koneksi) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>
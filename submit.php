<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$handphone = $_POST['handphone'];

$query = mysqli_query($koneksi, "INSERT INTO `tabeldata` (nama, email, handphone) VALUES ('$nama', '$email', '$handphone')");

if ($query) {
    header("Location: data.php");
} else {
    echo "Gagal tersimpan: " . mysqli_error($koneksi);
}
?>
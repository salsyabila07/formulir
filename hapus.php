<?php
include 'koneksi.php';

$no = $_GET['no'];

$query = mysqli_query($koneksi, "DELETE FROM `tabeldata` WHERE no = '$no'");

if ($query) {
    header("Location: data.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>
<?php
include 'koneksi.php';

$no = $_POST['no'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$handphone = $_POST['handphone'];

$query = mysqli_query($koneksi, "UPDATE `tabeldata` SET nama='$nama', email='$email', handphone='$handphone' WHERE no='$no'");

if ($query) {
    header("Location: data.php");
} else {
    echo "Gagal terupdate: " . mysqli_error($koneksi);
}
?>
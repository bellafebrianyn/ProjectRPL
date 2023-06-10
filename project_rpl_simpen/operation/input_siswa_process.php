<?php
include '../connection/connection.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jk = $_POST['button_jk'];
$alamat = $_POST['alamat_siswa'];

$mysql = "INSERT INTO siswa VALUES ('$nisn','$nis', '$nama_siswa', '$kelas', '$jk', '$alamat')";
$query = mysqli_query($connect, $mysql) or die(mysqli_error($connect));

if ($query) {
    header("location:../admin/input_siswa.php");
} else {
    echo "Input Eror";
}

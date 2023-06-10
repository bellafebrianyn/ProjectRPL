<?php
include '../connection/connection.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

$mysql = "INSERT INTO guru VALUES ('$nip','$nama', '$nohp', '$alamat')";
$query = mysqli_query($connect, $mysql) or die(mysqli_error($connect));

if ($query) {
    header("location:../admin/input_guru.php");
} else {
    echo "Input Eror";
}

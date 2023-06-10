<?php
include '../connection/connection.php';
$kode = $_POST['kode_mapel'];
$mapel = $_POST['nama_mapel'];
$guru = $_POST['dropdown_guru'];

$mysql = "INSERT INTO mapel VALUES ('$kode','$mapel', '$guru')";
$query = mysqli_query($connect, $mysql) or die(mysqli_error($connect));

if ($query) {
    header("location:../admin/input_mapel.php");
} else {
    echo "Input Eror";
}

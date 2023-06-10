<?php
include '../connection/connection.php';
$siswa = $_POST['dropdown_siswa'];
$mapel = $_POST['dropdown_mapel'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$keterampilan = $_POST['keterampilan'];

$mysql = "INSERT INTO nilai VALUES (id, '$siswa','$mapel', '$uts', '$uas', '$tugas', '$keterampilan')";
$query = mysqli_query($connect, $mysql) or die(mysqli_error($connect));

if ($query) {
    header("location:../admin/input_nilai.php");
} else {
    echo "Input Eror";
}

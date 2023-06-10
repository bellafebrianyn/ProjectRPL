<?php
include '../connection/connection.php';
$nisn = $_POST['dropdown_siswa'];
$sakit = $_POST['jml_sakit'];
$alfa = $_POST['jml_alfa'];
$izin = $_POST['jml_izin'];

$mysql = "INSERT INTO presensi VALUES (id, '$nisn', '$sakit', '$alfa', '$izin')";
$query = mysqli_query($connect, $mysql) or die(mysqli_error($connect));

if ($query) {
    header("location:../admin/input_presensi.php");
} else {
    echo "Input Eror";
}

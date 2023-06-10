<?php
include '../connection/connection.php';
$id = $_POST['id'];
$nisn = $_POST['dropdown_siswa'];
$sakit = $_POST['jml_sakit'];
$alfa = $_POST['jml_alfa'];
$izin = $_POST['jml_izin'];

$sql = "UPDATE presensi SET nisn_siswa = '$nisn', jml_sakit = '$sakit', jml_alfa = '$alfa', jml_izin = '$izin' WHERE id = '$id'";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
if ($query) {
    header("location:../admin/data_presensi.php");
} else {
    echo "Update data gagal, silahkan mencoba kembali dan terus mencoba";
}

<?php
include '../connection/connection.php';
$id = $_POST['id'];
$siswa = $_POST['dropdown_siswa'];
$mapel = $_POST['dropdown_mapel'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$keterampilan = $_POST['keterampilan'];

$sql = "UPDATE nilai SET uts = '$uts', uas = '$uas', tugas = '$tugas', keterampilan = '$keterampilan' WHERE id = '$id'";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
if ($query) {
    header("location:../admin/data_nilai.php");
} else {
    echo "Update data gagal, silahkan mencoba kembali dan terus mencoba";
}

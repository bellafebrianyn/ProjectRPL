<?php
include '../connection/connection.php';
$kode = $_POST['kode_mapel'];
$mapel = $_POST['nama_mapel'];
$guru = $_POST['dropdown_guru'];

$sql = "UPDATE mapel SET nama_mapel = '$mapel', nip_guru = '$guru' WHERE kode_mapel = '$kode'";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
if ($query) {
    header("location:../admin/data_mapel.php");
} else {
    echo "Update data gagal, silahkan mencoba kembali dan terus mencoba";
}

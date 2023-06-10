<?php
include '../connection/connection.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

$sql = "UPDATE guru SET nama = '$nama', no_hp = '$nohp', alamat = '$alamat' WHERE nip = '$nip';";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
if ($query) {
    header("location:../admin/data_guru.php");
} else {
    echo "Update data gagal, silahkan mencoba kembali dan terus mencoba";
}

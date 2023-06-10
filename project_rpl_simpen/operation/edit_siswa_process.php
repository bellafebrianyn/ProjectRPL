<?php
include '../connection/connection.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jk = $_POST['button_jk'];
$alamat = $_POST['alamat_siswa'];

$sql = "UPDATE siswa SET nis ='$nis', nama = '$nama_siswa', kelas = '$kelas', jenis_kelamin = '$jk', alamat = '$alamat' WHERE nisn = '$nisn';";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
if ($query) {
    header("location:../admin/data_siswa.php");
} else {
    echo "Update data gagal, silahkan mencoba kembali dan terus mencoba";
}

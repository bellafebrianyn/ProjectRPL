<?php
include '../connection/connection.php';
$nama = $_POST['nama'];
$password = $_POST['password'];
$nisn = $_POST['nisn'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

$mysql = "INSERT INTO orangtua VALUES (id, '$nama', '$password', $nisn, '$nohp', '$alamat')";
$query = mysqli_query($connect, $mysql) or die(mysqli_error($connect));

if ($query) {
  header("location:register.php");
} else {
  echo "Input Eror";
}

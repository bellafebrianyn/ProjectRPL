<?php
include '../connection/connection.php';
$usr = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO user VALUES(id, '$usr', '$pass')";
$query = mysqli_query($connect, $sql);
if ($query) {
    header("location:../admin/register.php?message=berhasil");
} else {
    header("location:../admin/register.php?message=register_gagal");
}

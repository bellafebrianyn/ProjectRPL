
<?php
if (isset($_GET['nisn'])) {
    include '../connection/connection.php';
    $nisn = $_GET['nisn'];

    $sql = mysqli_query($connect, "DELETE FROM siswa WHERE nisn = $nisn");
    if ($sql) {
        header("location:../admin/data_siswa.php");
        die();
    } else {
        header("location:../admin/data_siswa?message=hapus_gagal");
    }
} else if (isset($_GET['id'])) {
    include '../connection/connection.php';
    $id_presensi = $_GET['id'];

    $sql = mysqli_query($connect, "DELETE FROM presensi WHERE id = $id_presensi");
    if ($sql) {
        header("location:../admin/data_presensi.php");
        die();
    } else {
        header("location:../admin/data_presensi?message=hapus_gagal");
    }
} else if (isset($_GET['id'])) {
    include '../connection/connection.php';
    $id_nilai = $_GET['id'];

    $sql = mysqli_query($connect, "DELETE FROM nilai WHERE id = $id_nilai");
    if ($sql) {
        header("location:../admin/data_nilai.php");
        die();
    } else {
        header("location:../admin/data_nilai?message=hapus_gagal");
    }
} else if (isset($_GET['kode_mapel'])) {
    include '../connection/connection.php';
    $kode = $_GET['kode_mapel'];

    $sql = mysqli_query($connect, "DELETE FROM mapel WHERE kode_mapel = '$kode'");
    if ($sql) {
        header("location:../admin/data_mapel.php");
        die();
    } else {
        header("location:../admin/data_mapel?message=hapus_gagal");
    }
} else if (isset($_GET['nip'])) {
    include '../connection/connection.php';
    $nip = $_GET['nip'];

    $sql = mysqli_query($connect, "DELETE FROM guru WHERE nip = $nip");
    if ($sql) {
        header("location:../admin/data_guru.php");
        die();
    } else {
        header("location:../admin/data_guru?message=hapus_gagal");
    }
}

<?php
session_start();
include '../connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan nilai input dari form
    $nama = $_POST['nama'];
    $password = $_POST['password'];


    // Melakukan koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "simpen";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Memastikan hanya data input yang dimasukkan ke database
    $stmt = $conn->prepare("SELECT * FROM orangtua WHERE nama = ?");
    $stmt->bind_param("s", $nama);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Jika username ditemukan dalam database

        $row = $result->fetch_assoc();
        $stored_password = $row['password'];
        $nisn = $row['nisn_siswa'];
        $_SESSION['nisn_siswa'] = $nisn;
        $id = $row['id'];
        $_SESSION['id'] = $id;

        if ($password === $stored_password) {
            // Jika password sesuai, lakukan login
            // Tambahkan logika login yang sesuai di sini, seperti menyetel sesi atau cookie, dan mengalihkan pengguna ke halaman selanjutnya
?>

            <script>
                alert('Login berhasil');
                document.location = './page_orangtua.php';
            </script>

        <?php
        } else {
            // Jika password tidak sesuai
            echo "Password yang Anda masukkan salah.";
        }
    } else {
        // Jika username tidak ditemukan dalam database
        ?>

        <script>
            alert('Akun belum Terdaftar. Silahkan Daftar Akun di tata Usaha!');
            document.location = './login_orangtua.php';
        </script>

<?php
    }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "Metode HTTP tidak valid.";
}
?>
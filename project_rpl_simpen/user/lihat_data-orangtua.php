<?php
session_start();
$_SESSION['id'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>SIMPENWeb - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url("../img/bg-dasar.png");
            margin: 0;
            padding: 0;
            opacity: 0;
            animation: fade-in-zoom 1s forwards;
        }

        @keyframes fade-in-zoom {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .top-buttons {
            text-align: right;
            margin-bottom: 20px;
            font-family: "Poppins", sans-serif;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .top-button {
            display: inline-block;
            margin-left: 10px;
            background-color: #7edad2;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            width: 120px;
            /* Menentukan lebar tombol */
            height: 30px;
            /* Menentukan tinggi tombol */
            line-height: 30px;
            /* Memastikan teks berada di tengah tombol */
            text-align: center;
            /* Memastikan teks berada di tengah tombol */
            margin-top: -10px;
        }

        .bottom-buttons {
            text-align: center;
            /* Mengatur teks tombol berada di sebelah kiri */
            margin-top: 10px;
            /* Memberikan sedikit jarak antara teks dan tombol */
        }

        .bottom-button {
            display: inline-block;
            padding: 10px 30px;
            background-color: #7edad2;
            color: white;
            text-decoration: none;
            margin-right: 10px;
            font-family: "Poppins", sans-serif;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            width: 200px;
            /* Menentukan lebar tombol */
            height: 30px;
            /* Menentukan tinggi tombol */
            line-height: 30px;
            /* Memastikan teks berada di tengah tombol */
            text-align: center;
        }

        .bottom-buttons1 {
            text-align: center;
            /* Mengatur teks tombol berada di sebelah kiri */
            margin-top: 10px;
            /* Memberikan sedikit jarak antara teks dan tombol */
        }

        .bottom-button1 {
            display: inline-block;
            padding: 10px 30px;
            background-color: white;
            color: #424241;
            text-decoration: none;
            margin-right: 10px;
            font-family: "Poppins", sans-serif;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            width: 200px;
            /* Menentukan lebar tombol */
            height: 200px;
            /* Menentukan tinggi tombol */
            line-height: 200px;
            /* Memastikan teks berada di tengah tombol */
            text-align: center;
        }

        .paragraph {
            margin-top: -50px;
            /* Mengatur margin atas negatif untuk mendekati tulisan di atasnya */
            text-align: center;
            font-family: "Bebas Neue", cursive;
            font-size: 48px;
            color: #7EDAD2;
        }

        .subtitle {
            margin-top: 0px;
            text-align: center;
            font-family: "Bebas Neue", cursive;
            font-size: 36px;
            color: #424241;
        }

        .subtitle1 {
            margin-top: 0px;
            text-align: left;
        }

        .big-title {
            margin-top: 25px;
        }

        .big-title {
            margin-top: -30px;
            text-align: center;
            font-family: "Bebas Neue", cursive;
            font-size: 36px;
            color: #424241;
            line-height: 0.0005;
        }

        /* Table Styles */
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            margin-top: 50px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #7EDAD2;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="top-buttons">
            <h2 class="subtitle1">SIMPENWeb</h2>
            <a class="top-button" href="page_orangtua.php">Back</a>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <p class="paragraph">Data Orangtua</p>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>NISN Siswa</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database configuration
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "simpen";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch data from the database
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM orangtua WHERE id = $id ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $nomor = 1; // Inisialisasi nomor awal
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $nomor . "</td>"; // Menampilkan nomor urut
                            echo "<td>" . $row["nama"] . "</td>";
                            echo "<td>" . $row["password"] . "</td>";
                            echo "<td>" . $row["nisn_siswa"] . "</td>";
                            echo "<td>" . $row["no_hp"] . "</td>";
                            echo "<td>" . $row["alamat"] . "</td>";
                            echo "</tr>";
                            $nomor++; // Increment nomor setiap kali loop dilakukan
                        }
                    } else {
                        echo "<tr><td colspan='7'>No data found</td></tr>";
                    }
                    // ...
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
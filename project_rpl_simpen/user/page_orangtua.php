<?php
session_start();
$_SESSION['nisn_siswa'];
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
            margin-top: 0px;
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
    </style>
</head>

<body>
    <div class="container">
        <div class="top-buttons">
            <h2 class="subtitle1">SIMPENWeb</h2>
            <a class="top-button" href="index.php">Home</a>
            <a class="top-button" href="login_orangtua.php">Logout</a>
        </div>
    </div>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <h1 class="big-title">Selamat datang di Sistem</h1>
                <h2 class="subtitle">Monitoring Pendidikan</h2>
                <p class="paragraph">Silahkan Pilih Data yang ingin Di Lihat</p>

                <div class="bottom-buttons1">
                    <a class="bottom-button1" href=#>Data Persensi Siswa</a>
                    <a class="bottom-button1" href=#>Data Orangtua</a>
                    <a class="bottom-button1" href=#>Nilai Nilai</a>
                    <br>

                </div>
                <div class="bottom-buttons">
                    <br>
                    <a class="bottom-button" href="lihat_presensi.php">Lihat Persensi</a>
                    <a class="bottom-button" href="lihat_data-orangtua.php">Lihat Data</a>
                    <a class="bottom-button" href="lihat_nilai.php">Lihat Nilai</a>
                </div>


            </div>
        </div>
    </body>

</html>
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
            text-align: left;
            /* Mengatur teks tombol berada di sebelah kiri */
            margin-top: 10px;
            /* Memberikan sedikit jarak antara teks dan tombol */
        }

        .bottom-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #7edad2;
            color: white;
            text-decoration: none;
            margin-right: 10px;
            font-family: "Poppins", sans-serif;
            font-size: 32px;
            font-weight: bold;
            border-radius: 50px;
            width: 155px;
            /* Menentukan lebar tombol */
            height: 30px;
            /* Menentukan tinggi tombol */
            line-height: 30px;
            /* Memastikan teks berada di tengah tombol */
            text-align: center;
        }

        .bottom-button1 {
            display: inline-block;
            padding: 10px 20px;
            background-color: #7edad2;
            color: white;
            text-decoration: none;
            margin-right: 10px;
            font-family: "Poppins", sans-serif;
            font-size: 32px;
            font-weight: bold;
            border-radius: 50px;
            width: 365px;
            /* Menentukan lebar tombol */
            height: 30px;
            /* Menentukan tinggi tombol */
            line-height: 30px;
            /* Memastikan teks berada di tengah tombol */
            text-align: center;
        }


        .paragraph {
            margin-top: -100px;
            /* Mengatur margin atas negatif untuk mendekati tulisan di atasnya */
            font-family: "Poppins", sans-serif;
            font-size: 24px;

        }

        .subtitle {
            margin-top: -30px;
        }

        .subtitle1 {
            margin-top: 0px;
            text-align: left;
        }

        .big-title {
            margin-top: 25px;
        }

        .additional-buttons {
            text-align: right;
            margin-top: -530px;
        }

        .additional-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: white;
            color: white;
            text-decoration: none;
            margin-top: 10px;
            font-family: "Poppins", sans-serif;
            font-size: 20px;
            font-weight: bold;
            border-radius: 50px;
            width: 220px;
            /* Menentukan lebar tombol */
            height: 140px;
            /* Menentukan tinggi tombol */
            line-height: 30px;
            /* Memastikan teks berada di tengah tombol */
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="top-buttons">
            <h2 class="subtitle1">SIMPENWeb</h2>
            <a class="top-button" href="#">Home</a>
            <a class="top-button" href="register.php">Register</a>
        </div>
    </div>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <h1 class="big-title">SISTEM <span>MONITORING</span> </h1>
                <h2 class="subtitle">PENDIDIKAN</h2>
                <p class="paragraph">Website ini dibuat untuk mempermudah orangtua dalam <br> melakukan monitoring pendidikan terhadap siswa <span><br></span> <span>Pendidikan</span></p>

                <div class="bottom-buttons">
                    <a class="bottom-button1" href=#>Login Sebagai</a>
                    <br>

                </div>
                <div class="bottom-buttons">
                    <br>
                    <a class="bottom-button" href="../admin/index.php">Guru</a>
                    <a class="bottom-button" href="login_orangtua.php">Orangtua</a>

                </div>

                <div class="additional-buttons">
                    <a class="additional-button" href="#">Button 1</a>
                    <br>
                    <a class="additional-button" href="#">Button 2</a>
                    <br>
                    <a class="additional-button" href="#">Button 3</a>
                </div>
            </div>
        </div>
    </body>

</html>
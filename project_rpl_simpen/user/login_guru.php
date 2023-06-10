<!DOCTYPE html>
<html>
<head>
    <title>SIMPENWeb - Orangtua</title>
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
            width: 120px; /* Menentukan lebar tombol */
            height: 30px; /* Menentukan tinggi tombol */
            line-height: 30px; /* Memastikan teks berada di tengah tombol */
            text-align: center; /* Memastikan teks berada di tengah tombol */
            margin-top: -20px;
        }

        .login-container {
            background-color: #99b2ba;
            padding: 20px;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .login-container h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 120px;
            color: #424241;
            text-align: center;
            margin-top: 0;
        }

        .login-container label {
            display: block;
            margin-top: 10px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            background-color: #224957;
            border-radius: 12px;
            width: 720px;
            height: 50px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #20df7f;
            color: #ffffff;
            border: none;
            border-radius: 12px;
            height: 50px;
            cursor: pointer;
        }

        .subtitle{
        text-align: center;
        font-family: "Bebas Neue", cursive;
        font-size: 120px;
        color: #424241;
        line-height: 0.0005;
        margin-bottom: 70px;
        margin-top: 50px;
        }

        .subtitle1{
        margin-top: 0px;
        text-align: left;
     }

        .login-container input[type="text"]::placeholder,
        .login-container input[type="password"]::placeholder {
            color: white;
        }


        .register-text {
            text-align: center;
            font-family: "Lexend Deca", sans-serif;
            font-size: 16px;
            color: #224957;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
    <div class="top-buttons">
            <h2 class="subtitle1">SIMPENWeb</h2>
            <a class="top-button" href="index.php">Home</a>
            <a class="top-button" href="#">Info</a>
            <a class="top-button" href="#">Update Data</a>
        </div>
        <div class="login-container">
            <!-- <h1 style="font-family: 'Bebas Neue', sans-serif; font-size: 120px; color: #424241; text-align: center; margin-top: 0;">LOGIN PAGE GURU</h1> -->
            <h2 class="subtitle">LOGIN PAGE GURU</h2>
            <center><P>Silahkan Login Untuk Next Page</P></center>
            <form action="proses_login-guru.php" method="post">
            <div>
                    <label for="nama"></label>
                    <input type="text" id="nama" name="nama" placeholder="Nama" required />
                </div>
                <div>
                    <label for="nip"></label>
                    <input type="text" id="nip" name="nip" placeholder="NIP" required />
                </div>
                <div>
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Password" required />
                </div>
                <div>
                    <br />
                    <input type="submit" value="Login" />
                </div>
            </form>
            <p class="register-text">Jika Belum Memiliki Akun, Silahkan daftar di Tata Usaha!</p>
        </div>
    </div>
</body>
</html>

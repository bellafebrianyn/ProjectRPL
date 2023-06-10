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
            height: 30px;
            line-height: 30px;
            text-align: center;
            margin-top: -10px;
        }

        .bottom-buttons {
            text-align: center;
            margin-top: 10px;
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
            height: 30px;
            line-height: 30px;
            text-align: center;
        }

        .bottom-buttons1 {
            text-align: center;
            margin-top: 10px;
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
            height: 200px;
            line-height: 200px;
            text-align: center;
        }

        .paragraph {
            margin-top: -50px;
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

        .right-column {
            float: right;
            width: 30%;
        }

        .submit-button {
            display: block;
            margin: 20px auto;
            width: 200px;
            background-color: #7edad2;
            color: white;
            text-decoration: none;
            font-family: "Poppins", sans-serif;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            padding: 10px 30px;
            text-align: center;
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
    </div>

    <div class="container">
        <div class="content">
            <p class="paragraph">NILAI - NILAI</p>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NISN</th>
                        <th>Kode Mapel</th>
                        <th>Tugas</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Keterampilan</th>
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
                    $sql = "SELECT nisn_siswa, kode_mapel, tugas, uts, uas, keterampilan FROM nilai";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $nomor = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $nomor . "</td>";
                            echo "<td>" . $row["nisn_siswa"] . "</td>";
                            echo "<td>" . $row["kode_mapel"] . "</td>";
                            echo "<td>" . $row["tugas"] . "</td>";
                            echo "<td>" . $row["uts"] . "</td>";
                            echo "<td>" . $row["uas"] . "</td>";
                            echo "<td>" . $row["keterampilan"] . "</td>";
                            echo "</tr>";
                            $nomor++;
                        }
                    } else {
                        echo "<tr><td colspan='7'>No data found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
        <div class="right-column">
            <form>
                <h3 class="subtitle1">Tambah Data</h3>
                <input type="text" name="nisn" placeholder="NISN">
                <input type="text" name="kode_mapel" placeholder="Kode Mapel">
                <input type="text" name="tugas" placeholder="Tugas">
                <input type="text" name="uts" placeholder="UTS">
                <input type="text" name="uas" placeholder="UAS">
                <input type="text" name="keterampilan" placeholder="Keterampilan">
                <input class="submit-button" type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
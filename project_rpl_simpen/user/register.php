<!DOCTYPE html>
<html>

<head>
  <title>SIMPENWeb - Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
      height: 50px;
      /* Menentukan tinggi tombol */
      line-height: 30px;
      /* Memastikan teks berada di tengah tombol */
      text-align: center;
      /* Memastikan teks berada di tengah tombol */
      /* margin-top: -10px; */
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

      text-align: center;
      font-family: "Bebas Neue", cursive;
      font-size: 48px;
      color: white;
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
      <h2 class="subtitle1" style="font-weight: 800;">SIMPENWeb</h2>
      <a class="top-button" href="index.php">Back</a>
      <!-- <a class="top-button" href="#">Update Data</a> -->
    </div>
  </div>

  <center>
    <div class="card" style="background-color: #7edad2; width: 30rem;">
      <div class="card-body">
        <h1 class="paragraph ">REGISTER</h1>
        <h4 class="paragraph ">Input Data Orangtua</h4>
        <form action="proses_register.php" method="POST">
          <input class="form-control" type="text" placeholder="Nama" aria-label="default input example" name="nama">
          <input class="form-control mt-3" type="text" placeholder="Password" aria-label="default input example" name="password">
          <input class="form-control mt-3" type="text" placeholder="NISN Siswa" aria-label="default input example" name="nisn">
          <input class="form-control mt-3" type="text" placeholder="No. HP" aria-label="default input example" name="nohp">
          <input class="form-control mt-3" type="text" placeholder="Alamat" aria-label="default input example" name="alamat">
          <input type="submit" class="btn btn-primary mt-3" value="Submit">
        </form>
      </div>
    </div>
  </center>

</body>

</html>
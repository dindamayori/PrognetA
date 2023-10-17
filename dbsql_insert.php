<?php
    $servername = "prognet.localnet";
    $username = "2205551034";
    $password = "2205551034";
    $dbname = "db_2205551034";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO tb_biodata (Nama_Lengkap,Nim,Jenis_Kelamin, Hoby, Fakultas, Tanggal_Lahir, Email, Kota_Asal) VALUES
            ('$_POST[fullname]','$_POST[nim]','$_POST[jeniskelamin]','$_POST[hoby]','$_POST[fakultas]','$_POST[tgllahir]','$_POST[email]','$_POST[kota]')";
    if ($conn->query($sql) === TRUE){
        echo "data behasil";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tugas Database MYSQL - CRUD Form Biodata</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-home-page.png" rel="icon">
  <link href="assets/img/logo-home-page.png" rel="logo-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-image" style="background-image: url(assets/img/home-bg.jpg)">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Dinda Mayori</a></h1>
  <!-- ======= Start Navbar ======= -->
  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto" href="index.html">Home</a></li>
      <li><a class="nav-link scrollto active" href="index.html#taks">Taks</a></li>
      <li><a class="nav-link scrollto" href="dbsql_select.php">List Biodata</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- ======= End navbar ======= -->
    </div>
  </header>
  <!-- ======= End Header ======= -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-5">
      <h1 class="text-center mb-5">Hasil Form Biodata</h1>
        <table class="table" border="2">
          <thead>
            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // kolom nim
                echo "<tr>";
                echo "<td>"."Nama Lengkap"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$nim = $_POST['fullname']."</td>";
                echo "</tr>";
                // kolom nama lengkap
                echo "<tr>";
                echo "<td>"."Nim"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$fullname = $_POST['nim']."</td>";
                echo "</tr>";
                // kolom jenis kelamin
                echo "<tr>";
                echo "<td>"."Jenis Kelamin"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$jeniskelamin = $_POST['jeniskelamin']."</td>";
                echo "</tr>";
                // kolom Hoby
                echo "<tr>";
                echo "<td>"."Hoby"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$hoby = $_POST['hoby']."</td>";
                echo "</tr>";
                // kolom Fkultas
                echo "<tr>";
                echo "<td>"."Fakultas"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$fakultas = $_POST['fakultas']."</td>";
                echo "</tr>";
                // kolom tanggal lahir
                echo "<tr>";
                echo "<td>"."Tanggal Lahir"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$tgllahir = $_POST['tgllahir']."</td>";
                echo "</tr>";
                // kolom e-mail
                echo "<tr>";
                echo "<td>"."Email"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$email = $_POST['email']."</td>";
                echo "</tr>";
                // kolom hobi
                echo "<tr>";
                echo "<td>".""."<Kota Asal/td>";
                echo "<td>".":"."</td>";
                echo "<td>".$kota = $_POST['kota']."</td>";
                echo "</tr>";
              }
            ?>
          </thead>
        </table>
      <a href="tugas_dbsql.php" class="previous">&laquo; Previous</a>
    </div>
  </section>
  <!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="mt-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Portofolio</strong>. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ======= End  Footer ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
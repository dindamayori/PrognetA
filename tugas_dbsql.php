<?php
    $servername = "prognet.localnet";
    $username = "2205551034";
    $password = "2205551034";
    $dbname = "db_2205551034";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dinda Mayori ProgNet - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Dinda Mayori<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          </li>
          <li><a href="tugas_dbsql.php">TUGAS PROGNET 3</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->


  <main id="main"><!-- Start main -->

  <!-- ======= Start Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-4">
      <h1 class="text-center mb-2">Form Biodata Mahasiswa</h1>
        <form name="formBiodata" action="dbsql_insert.php" method="post" onsubmit="return validateForm()">
        <div class="form-group mb-3">
            <label><strong>Nim :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="Nim" class="form-control">
          </div>
          <div>
            <label><strong>Nama Lengkap:</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control">
          </div>
          <div>
            <label"><strong>Jenis Kelamin:</strong></label>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki'>LAKI - LAKI</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan'>PEREMPUAN</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Tidak ingin Memberi Tahu'>LAINNYA</p>
          </div>
          <div class="form-group mb-3">
            <label><strong>Hoby :</strong></label>
            <input type="text" name="hoby" id="hoby" placeholder="Hoby" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label><strong>Fakultas :</strong></label>
            <select name="fakultas" id="fakultas" class="form-control">
              <option selected>Pilih Fakultas</option>
              <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
              <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
              <option value="Fakultas Kedokteran Hewan">Fakultas Kedokteran Hewan</option>
              <option value="Fakultas Pariwisata">Fakultas Pariwisata</option>
              <option value="Fakultas Pertanian">Fakultas Pertanian</option>
              <option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
              <option value="Fakultas Peternakan">Fakultas Peternakan</option>
              <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
              <option value="Fakultas Hukum">Fakultas Hukum</option>
              <option value="Fakultas Teknik">Fakultas Teknik</option>
              <option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
              <option value="Fakultas Ilmu Kelautan dan Perikanan">Fakultas Ilmu Kelautan dan Perikanan</option>
              <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <label><strong>Tanggal Lahir :</strong></label>
            <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label><strong>Kota Asal :</strong></label>
            <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota">
          </div>
          <div>
            <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
          </div>
        </form>
      </div>
    <script>
      function validateForm() {
       // Validasi NIM
        if (document.forms["formBiodata"]["nim"].value == "") {
            alert("Masukkan Nim Anda");
            document.forms["formBiodata"]["nim"].focus();
            return false;
        }
        // Validasi Nama Lengkap
        if (document.forms["formBiodata"]["fullname"].value == "") {
            alert("Masukkan Nama Lengkap Anda");
            document.forms["formBiodata"]["fullname"].focus();
            return false;
        }
        // Validasi Jenis Kelamin
        var jeniskelamin = document.getElementsByName('jeniskelamin');
        var genValue = false;
          for(var i=0; i<jeniskelamin.length;i++){
            if(jeniskelamin[i].checked == true){
                genValue = true;    
            }
          }
          if(!genValue){
            alert("Pilih Jenis Kelamin Anda");
            return false;
          }
        // Validasi Hoby
        if (document.forms["formBiodata"]["hoby"].value == "") {
            alert("Masukkan Hoby Anda");
            document.forms["formBiodata"]["hoby"].focus();
            return false;
        }
        // Validasi Fakultas
        if (document.forms["formBiodata"]["fakultas"].selectedIndex < 1) {
            alert("Pilih Fakultas Anda");
            document.forms["formBiodata"]["fakultas"].focus();
            return false;
        }
        // Validasi Tanggal Lahir
        if (document.forms["formBiodata"]["tgllahir"].value == "") {
            alert("Masukkan Tanggal Lahir Anda");
            document.forms["formBiodata"]["tgllahir"].focus();
            return false;
        }
        // Validasi E-mail
        if (document.forms["formBiodata"]["email"].value == "") {
            alert("Masukkan E-mail Aktif Anda");
            document.forms["formBiodata"]["email"].focus();
            return false;
        }
        // Validasi Kota Asal
        if (document.forms["formBiodata"]["kota"].value == "") {
            alert("Masukkan Kota Anda");
            document.forms["formBiodata"]["kota"].focus();
            return false;
        }
      }
    </script>
  </section>
  <!-- ======= End Form ======= -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-3">
    <div class="col-lg-3 col-md-6 d-flex">
      <i class="bi bi-geo-alt icon"></i>
      <div>
        <h4>Address</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022 - US<br>
        </p>
      </div>

    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-telephone icon"></i>
      <div>
        <h4>Reservations</h4>
        <p>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-clock icon"></i>
      <div>
        <h4>Opening Hours</h4>
        <p>
          <strong>Mon-Sat: 11AM</strong> - 23PM<br>
          Sunday: Closed
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
      <h4>Follow Us</h4>
      <div class="social-links d-flex">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Dinda Mayori</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer><!-- End Footer -->

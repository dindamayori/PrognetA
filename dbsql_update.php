<?php
    $servername = "prognet.localnet";
    $username = "2205551034";
    $password = "2205551034";
    $dbname = "db_2205551034";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);

    if(isset($_POST['update'])){
        //mengambil data dari form//
        $nim=$_POST['nim'];
        $nama_lengkap=$_POST['fullname'];
        $jenis_kelamin=$_POST['jeniskelamin'];
        $hobi=$_POST['hoby'];
        $fakultas=$_POST['fakultas'];
        $tanggal_lahir=$_POST['tgllahir'];
        $email=$_POST['email'];
        $kota_asal=$_POST['kota'];

    // proses update
    $sql = "UPDATE tb_biodata SET
            nim ='$nim',nama_lengkap ='$nama_lengkap',jenis_kelamin ='$jenis_kelamin',hobi ='$hobi',fakultas ='$fakultas',tanggal_lahir ='$tanggal_lahir',email ='$email',kota_asal ='$kota_asal'
            WHERE nim ='$nim'";
    if ($conn->query($sql) === TRUE) {
        header("Location:dbsql_select.php");
        }
    }

    $idtoupdate=$_GET['nim'];

    $sql = "SELECT * FROM tb_biodata WHERE nim='$idtoupdate'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
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
    <div class="container mt-4">
      <h1 class="text-center mb-2">Form Biodata Mahasiswa</h1>
        <form name="formBiodata" action="" method="post" onsubmit="return validateForm()">
        <div class="form-group mb-3">
            <label><strong>NIM :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="NIM" class="form-control" value="<?php echo $row['nim']; ?>">
          </div>
          <div class="form-group mb-3">
            <label><strong>Nama lengkap :</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control" value="<?php echo $row['nama_lengkap']; ?>">
          </div>
          <div>
            <label"><strong>Jenis Kelamin :</strong></label>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki'>laki - laki</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan'>Perempuan</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Tidak ingin Memberi Tahu'>Lainnya</p>
          </div>
          <div class="form-group mb-3">
            <label><strong>Hobi :</strong></label>
            <input type="text" name="hoby" id="hoby" placeholder="hoby" class="form-control" value="<?php echo $row['hobi']; ?>">
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
            <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $row['tanggal_lahir']; ?>">
          </div>
          <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group mb-3">
            <label><strong>Kota Asal :</strong></label>
            <input type="text" name="kota" id="kota" class="form-control" placeholder="kota" value="<?php echo $row['kota_asal']; ?>">
          </div>
          <div>
            <button type="submit" name="update" value="update" class="btn btn-primary mb-4">Update</button>
          </div>
        </form>
      </div>
    <script>
      function validateForm() {
        // Validasi NIM
        if (document.forms["formBiodata"]["nim"].value == "") {
            alert("Masukkan NIM Anda");
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
        // Validasi Hobi
        if (document.forms["formBiodata"]["hoby"].value == "") {
            alert("Masukkan Hobi Anda");
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
            alert("Masukkan Kota Asal Anda");
            document.forms["formBiodata"]["kota"].focus();
            return false;
        }
      }
    </script>
  </section>
  <!-- ======= End Form ======= -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Portofolio</strong>. All Rights Reserved</p>
            </div>
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